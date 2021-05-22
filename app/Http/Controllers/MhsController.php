<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;
use App\Models\Kampus;
use App\Models\Perusahaan;


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

        // $mhs = \App\Mahasiswa::find($kodePT);
        // return $mhs->nama_pt;
        // $mhs = Mahasiswa::get();
        
        // $mahasiswa = Mahasiswa::with('perusahaan')->get(); 

        // $mahasiswa = Mahasiswa::all();
        // $perusahaan = Perusahaan::all();
        // return view('admin_kampus\kmps_dataMhs', compact('mahasiswa','perusahaan'));

        // return view('admin_kampus\kmps_dataMhs',['mhs' => $mhs]);
        // return view('article',['artikel' => $artikel]); 
        // $mhs = DB::table('mhss')->get();
        $mahasiswa = DB::table('mahasiswas')
            ->join('perusahaans', 'perusahaans.kode_pt', '=', 'mahasiswas.kodePT')
            ->select('mahasiswas.nim', 'mahasiswas.nama_mhs', 'perusahaans.nama_pt', 'perusahaans.pembimbing')
            ->get();
            return view('admin_kampus\kmps_dataMhs', compact('mahasiswa'));
        // return view('admin_kampus\kmps_dataMhs', ['mhs' => $mhs]);
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
