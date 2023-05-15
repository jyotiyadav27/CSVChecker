<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class DownloadController extends Controller
{
    public function download($file)
    {
        $filePath = storage_path('app/public/csv_download' . $file);

        if (file_exists($filePath)) {
            return response()->download($filePath, $file);
        } else {
            abort(404, 'File not found');
        }
    }
}
