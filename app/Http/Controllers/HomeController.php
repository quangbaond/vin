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
        $this->middleware('auth');

        $setting = \App\Models\Setting::first();
        view()->share('setting', $setting);
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
            'amount' => 'required|numeric|min:1',
        ]);

        $user = auth()->user();

        if ($user->money < $request->amount) {
            return redirect()->route('withdraw')->with('error', 'Số dư không đủ')->withInput();
        }
        $user->money = $user->money - $request->amount;
        $user->save();

        $history = new \App\Models\HistoryMoney;
        $history->type = 'withdraw';
        $history->amount = $request->amount;
        $history->status = 'pending';
        $history->user_id = $user->id;
        $history->note = $request->note;
        $history->save();

        return back()->with('success', 'Yêu cầu rút tiền thành công');
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
        $historyInvest = $user->historyInvest;
        return view('historyInvest', compact('historyInvest'));
    }

    public function updateProfile(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
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
}
