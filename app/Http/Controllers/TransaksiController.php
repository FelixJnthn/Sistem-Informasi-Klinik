<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function tindakanObat()
    {
        return view('transaksi.pendaftaran');
    }
}
