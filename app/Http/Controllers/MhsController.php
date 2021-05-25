<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;
use App\Models\Kampus;
use App\Models\Perusahaan;
use App\Models\Tugas;


class MhsController extends Controller
{
    // mhs
    public function home_mhs(){
        return view('mhs\mhsHome');
    }

    public function selesai_mhs(){
        $tgs = DB::table('tugas')
            ->join('mhs_memiliki_tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('tugas.kode_tugas', 'tugas.nama_tugas', 'mhs_memiliki_tugas.nilai', 'mhs_memiliki_tugas.komentar')
            ->get();
        return view('mhs\mhsSelesai', compact('tgs'));
    }

    public function ready_mhs(){
        $tgs = Tugas::Get();
        return view('mhs\mhsReady', compact('tgs'));
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
            'status' => "required|mimetypes:application/pdf|max:10000",
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$status = $request->status('status');
 
		$nama_file = time()."_".$status->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Tugas::create([
			'status' => $nama_file,
		]);
 
		return redirect()->back();
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
