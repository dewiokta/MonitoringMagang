<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MhsController extends Controller
{
    public function home_mhs(){
        return view('mhs\mhsHome');
    }

    public function selesai_mhs(){
        return view('mhs\mhsSelesai');
    }

    public function ready_mhs(){
        return view('mhs\mhsReady');
    }
}
