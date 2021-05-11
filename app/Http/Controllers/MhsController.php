<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MhsController extends Controller
{
    // mhs
    public function home_mhs(){
        return view('mhs\mhsHome');
    }

    public function selesai_mhs(){
        return view('mhs\mhsSelesai');
    }

    public function ready_mhs(){
        return view('mhs\mhsReady');
    }


    // admin kampus
    public function home_kmps(){
        return view('admin_kampus\kmps_home');
    }
    public function dataMhs_kmps(){
        return view('admin_kampus\kmps_dataMhs');
    }


    //admin pt
    public function home_pt(){
        return view('admin_pt\pt_home');
    }
    public function ready_pt(){
        return view('admin_pt\pt_ready');
    }
    public function mhs_pt(){
        return view('admin_pt\pt_mhs');
    }
    public function selesai_pt(){
        return view('admin_pt\pt_selesai');
    }
}
