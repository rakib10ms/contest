<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function download($file){
       $file_path = public_path('assets/uploads/contest-result/'.$file);
    return response()->download($file_path);
    }
}
