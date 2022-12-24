<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\KirimEmail;
use App\Models\Pendaki;
use Illuminate\Support\Facades\Mail;


class KirimController extends Controller
{
    public function kirim_email()
    {
        return view('kirim-email');
    }

}
