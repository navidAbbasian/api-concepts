<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function show()
    {
        return response()->download(storage_path('app/GraceHopper.pdf'),'Amazing Grace');
    }
}
