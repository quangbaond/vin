<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $setting = \App\Models\Setting::first();
        view()->share('setting', $setting);
        $this->middleware('auth');
        $this->middleware('check');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pay()
    {
        return view('pay');
    }

    public function me()
    {
        return view('me');
    }

    public function profile()
    {
        return view('profile');
    }

    public function withdraw()
    {
        return view('withdraw');
    }

    public function withdrawPost(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ], [
            'amount.required' => 'Vui lòng nhập số tiền',
        ]);

        // parse amount to float 11.111.111
        $request->amount = str_replace(',', '', $request->amount);
        $request->amount = str_replace('.', '', $request->amount);
        $request->amount = str_replace(' ', '', $request->amount);

        $user = auth()->user();

        if ($user->balance < $request->amount) {
            return redirect()->route('withdraw')->with('error', 'Số dư không đủ')->withInput();
        }
        // $user->balance = $user->balance - $request->amount;
        // $user->save();

        $history = new \App\Models\HistoryMoney;
        $history->type = 'withdraw';
        $history->amount = $request->amount;
        $history->status = 'pending';
        $history->user_id = $user->id;
        $history->note = $request->note;
        $history->save();

        return back()->with('success', 'Yêu cầu rút tiền chờ xử lý.');
    }

    public function historyDeposit()
    {
        $user = auth()->user();
        $historyDeposit = $user->historyDeposit;
        return view('historyDeposit', compact('historyDeposit'));
    }

    public function historyWithdraw()
    {
        $user = auth()->user();
        $historyWithdraw = $user->historyWithdraw;
        return view('historyWithdraw', compact('historyWithdraw'));
    }

    public function historyInvest()
    {
        $user = auth()->user();
        $lotos = $user->lotos;
        return view('historyInvest', compact('lotos'));
    }

    public function updateProfile(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
        ], [
            'name.required' => 'Vui lòng nhập họ và tên',
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'name.max' => 'Họ và tên không được vượt quá 255 ký tự',
            'username.max' => 'Tên đăng nhập không được vượt quá 255 ký tự'
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->number_phone = $request->number_phone;
        $user->bankName = $request->bankName;
        $user->bankNumber = $request->bankNumber;
        $user->save();

        return back()->with('success', 'Cập nhật thông tin thành công');
    }

    public function loto(Request $request)
    {
        $roomName = $request->query('room');
        if ($roomName !== null) {
            if (!in_array($roomName, ['vip', 'so-cap', 'trung-cap', 'cao-cap'])) {
                return redirect()->route('loto');
            } else {
                $roomId = 0;
                if($roomName === 'so-cap') {
                    $roomId = 1;
                } else if($roomName === 'trung-cap') {
                    $roomId = 2;
                } else if($roomName === 'cao-cap') {
                    $roomId = 3;
                } else if($roomName === 'vip') {
                    $roomId = 4;
                }
                $room = \App\Models\Room::query()->find($roomId);

                if($room === null) {
                    return redirect()->route('loto');
                }
                $openTime = \Carbon\Carbon::parse($room->open_time);
                $closeTime = \Carbon\Carbon::parse($room->close_time);
                $now = \Carbon\Carbon::now();

                $roomClose = $now->lt($openTime) || $now->gt($closeTime) ? 'Close' : 'Open';
                $lotos = \App\Models\Loto::query()->where('room', $roomName)->where('user_id', auth()->id())->orderBy('created_at', 'desc')->limit(20)->get();
                return view('lotoGame', compact('roomName', 'roomClose', 'lotos'));

            }
        }

        return view('loto', compact('roomName'));
    }
}
