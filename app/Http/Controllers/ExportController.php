<?php

namespace App\Http\Controllers;

use App\Exports\PendakiExport;
use App\Pendaki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return view('export.index');
    }
}
