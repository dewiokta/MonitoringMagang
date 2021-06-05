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
use App\Models\Progres;


class MhsController extends Controller
{
    // mhs
    public function home_mhs()
    {
        $rpt = Progres::Get();
        return view('mhs\mhsHome', compact('rpt'));
    }
    public function storee(Request $request)
    {
        $this->validate($request, [
            'kd_progres' => 'required',
            'tanggal' => 'required',
            'detail' => 'required',
            'nimmm' => 'required',
        ]);

        Progres::create([
            'kd_progres' => $request->kd_progres,
            'tanggal' => $request->tanggal,
            'detail' => $request->detail,
            'nimmm' => $request->nimmm,
        ]);

        return redirect('home_mhs')->with('Success', 'Tugas added successfully');
    }
    public function selesai_mhs()
    {
        // $tgs = DB::table('tugas')->where('kode_tugas', '=', '2222')
        $tgs = DB::table('tugas')
            ->join('mhs_memiliki_tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('tugas.status', 'tugas.nama_tugas', 'mhs_memiliki_tugas.nilai', 'mhs_memiliki_tugas.komentar')
            ->where('nimm', '=', '1931710015')->get();
        return view('mhs\mhsSelesai', compact('tgs'));
    }
    public function add_progres()
    {
        return view('mhs\add_progres');
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
        // $status = $request->file('status');
        // $nama_file=time()."_".$status->getClientOriginalName();

        Tugas::create([
            'status' => $request->status
            // 'status' => $nama_file
        ]);

        return redirect()->back()->with('succes', 'Data Telah diupload');
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
            ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
            ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('mahasiswas.nim', 'mahasiswas.nama_mhs', 'perusahaans.nama_pt', 'perusahaans.pembimbing', 'tugas.nama_tugas')
            ->get();
        return view('admin_kampus\kmps_dataMhs', compact('mahasiswa'));
    }
    //khusus halaman admin kampus untuk mencari data mahasiswa saja, 
    // karena pada halaman tersebut menampilkan banyak sekali data yang munkin muncul 
    // daripada halaman yang lainnya
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $mahasiswa = DB::table('mahasiswas')
        ->join('perusahaans', 'perusahaans.kode_pt', '=', 'mahasiswas.kodePT')
        ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
        ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
        ->select('mahasiswas.nim', 'mahasiswas.nama_mhs', 'perusahaans.nama_pt', 'perusahaans.pembimbing', 'tugas.nama_tugas')
            ->where('nama_mhs', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('admin_kampus\kmps_dataMhs', compact('mahasiswa'));
    }

    public function lihat($id)
    {
        $lht = DB::table('progres')->where('nimmm', '=', $id)->get();
        return view('admin_kampus\lihat', compact('lht'));
    }
    // public function tampil()
    // {
    //     $l = DB::table('mahasiswas')
    //         ->join('perusahaans', 'perusahaans.kode_pt', '=', 'mahasiswas.kodePT')
    //         ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
    //         ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
    //         ->select(
    //             'mahasiswas.nim',
    //             'mahasiswas.nama_mhs',
    //             'mahasiswas.ttl',
    //             'mahasiswas.jurusan',
    //             'perusahaans.nama_pt',
    //             'perusahaans.pembimbing',
    //             'perusahaans.alamat',
    //             'perusahaans.pembimbing',
    //             'tugas.nama_tugas'
    //         )
    //         ->get();
    //     return view('admin_kampus\tampil', compact('l'));
    // }



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
        // $editpt = Tugas::get();
        $editpt = DB::table('tugas')->where('kode_tugas', '=', $id)->get();
        return view('admin_pt\edit_pt', compact('editpt'));
    }
    public function nilai($id)
    {
        // $nl=mhs_memiliki_tugas::get();
        $nl = DB::table('mhs_memiliki_tugas')->where('nimm', '=', $id)->get();
        return view('admin_pt\nilai', compact('nl'));
    }
    public function stornilai(Request $request)
    {
        $this->validate($request, [
            'nilai' => 'required',
            'komentar' => 'required',
        ]);

        mhs_memiliki_tugas::create([
            'nilai' => $request->nilai,
            'komentar' => $request->komentar,
        ]);

        return redirect('/ready_pt')->with('Success', 'Tugas added successfully');
    }
    public function add_pt()
    {
        return view('admin_pt\add_pt');
    }

   

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_tugas' => 'required',
            'nama_tugas' => 'required',
        ]);

        Tugas::create([
            'kode_tugas' => $request->kode_tugas,
            'nama_tugas' => $request->nama_tugas,
        ]);

        return redirect('/ready_pt')->with('Success', 'Tugas added successfully');
    }
    public function update_pt(Request $request)
    {
        DB::table('tugas')->where('kode_tugas', $request->id)->update([
            'kode_tugas' => $request->kode_tugas,
            'nama_tugas' => $request->nama_tugas
        ]);
        return redirect('ready_pt')->with('Success', 'Tugas edited successfully');
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
            ->join('perusahaans', 'perusahaans.kode_pt', '=', 'mahasiswas.kodePT')
            ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
            ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('perusahaans.kode_pt', 'mahasiswas.nim', 'mahasiswas.nama_mhs', 'mahasiswas.ttl', 'mahasiswas.jurusan', 'tugas.nama_tugas')
            ->get();
        return view('admin_pt\pt_mhs', compact('mhss'));
    }

    public function selesai_pt()
    {
        $mhsss = DB::table('mahasiswas')
            ->join('perusahaans', 'perusahaans.kode_pt', '=', 'mahasiswas.kodePT')
            ->join('mhs_memiliki_tugas', 'mahasiswas.nim', '=', 'mhs_memiliki_tugas.nimm')
            ->join('tugas', 'mhs_memiliki_tugas.kode_tgs', '=', 'tugas.kode_tugas')
            ->select('perusahaans.kode_pt', 'tugas.kode_tugas', 'mahasiswas.nama_mhs', 'mahasiswas.nim', 'tugas.nama_tugas', 'tugas.status')
            ->get();
        return view('admin_pt\pt_selesai', compact('mhsss'));
    }
}
