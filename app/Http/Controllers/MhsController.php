<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Session;

use App\Models\Mahasiswa;
use App\Models\Kampus;
use App\Models\Perusahaan;
use App\Models\Tugas;
use App\Models\mhs_memiliki_tugas;


class MhsController extends Controller
{
    // mhs
    public function home_mhs()
    {
        return view('mhs\mhsHome');
    }

    public function selesai_mhs()
    {
        $tgs = DB::table('tugas')
            ->join('mhs_memiliki_tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('tugas.kode_tugas', 'tugas.nama_tugas', 'mhs_memiliki_tugas.nilai', 'mhs_memiliki_tugas.komentar')
            ->get();
        return view('mhs\mhsSelesai', compact('tgs'));
    }

    public function ready_mhs()
    {
        $tgs = Tugas::Get();
        return view('mhs\mhsReady', compact('tgs'));
    }

    public function upload_file(Request $request)
    {
        $this->validate($request, [
            'status' => "required|mimetypes:application/pdf|max:10000",
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $status = $request->status('status');

        $nama_file = time() . "_" . $status->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $status->move($tujuan_upload, $nama_file);

        Tugas::create([
            'status' => $nama_file,
        ]);

        return redirect()->back();
    }




    // admin kampus
    public function home_kmps()
    {
        return view('admin_kampus\kmps_home');
    }

    public function dataMhs_kmps()
    {
        $mahasiswa = DB::table('mahasiswas')
            ->join('perusahaans', 'perusahaans.kode_pt', '=', 'mahasiswas.kodePT')
            ->select('mahasiswas.nim', 'mahasiswas.nama_mhs', 'perusahaans.nama_pt', 'perusahaans.pembimbing')
            ->get();
        return view('admin_kampus\kmps_dataMhs', compact('mahasiswa'));
    }



    //admin pt
    public function home_pt()
    {
        return view('admin_pt\pt_home');
    }

    public function ready_pt()
    {
        $tgss = Tugas::Get();
        return view('admin_pt\pt_ready', compact('tgss'));
    }

    public function edit_pt($id)
    {
        $editpt = Tugas::get();
        // $editpt = DB::table('tugas')->where('kode_tugas', '=', $id)->get();
        return view('admin_pt\edit_pt', compact('editpt'));
    }

    public function add_pt()
    {
        return view('admin_pt\add_pt');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'kode_tugas' => 'required',
    		'nama_tugas' => 'required',
            'status' => 'null'
    	]);
 
        Tugas::create([
    		'kode_tugas' => $request->kode_tugas,
    		'nama_tugas' => $request->nama_tugas,
            'status' != $request->status
    	]);
 
    	return redirect('/ready_pt');
    }
    public function update_pt(Request $request)
    {
        DB::table('tugas')->where('kode_tugas', $request->id)->update([
            'kode_tugas' => $request->kode_tugas,
            'nama_tugas' => $request->nama_tugas
        ]);
        return redirect('ready_pt');
    }

    public function destroy_pt($id)
    {
        //
        // menghapus data pegawai berdasarkan id yang dipilih 
        DB::table('tugas')->where('kode_tugas', $id)->delete();
        return redirect()->back()->with('Success', 'Tugas deleted successfully');
    }


    public function mhs_pt()
    {
        $mhss = DB::table('mahasiswas')
            ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
            ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('mahasiswas.nim', 'mahasiswas.nama_mhs', 'mahasiswas.ttl', 'mahasiswas.jurusan', 'tugas.nama_tugas')
            ->get();
        return view('admin_pt\pt_mhs', compact('mhss'));
    }

    public function selesai_pt()
    {
        $mhsss = DB::table('mahasiswas')
            ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
            ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('tugas.kode_tugas', 'mahasiswas.nama_mhs', 'tugas.nama_tugas', 'tugas.status')
            ->get();
        return view('admin_pt\pt_selesai', compact('mhsss'));
    }
}
