@extends('masterp')

@section('konten')
<style type="text/css">
  div.hello {
    text-align: center;
  }

  div.card-body {
    background-color: white;
  }

  form.example input[type=text] {
    padding: 8px;
    font-size: 17px;
    border: 1px;
    float: left;
    width: 80%;
    background: #ffffff;
  }

  form.example button {
    float: left;
    width: 20%;
    padding: 7px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
  }
</style>



<div class="container">
  <br><br>
  <div class="row">
    <div class="col-md-12">
      <div class="hello">
        <h2>Tugas Ready</h2>
        <p>Tugas yang belum dikerjakan mahasiswa magang</p>
      </div>
      <br>
      <form class="example" action="/action_page.php" style="margin:auto;max-width:700px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <br><br><br><br>

      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>Kode Tugas </th>
              <th>Nama Tugas </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tgss as $t)
            @if($t->status == null)
            <tr>
              <td> {{ $t->kode_tugas }} </td>
              <td> {{ $t->nama_tugas }} </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br>
  <center>
    <button class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i>Tambah</button>
  </center>
</div>


<!-- modal add data-->
<div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xs">
    <form name="frm_add" id="frm_add" class="form-horizontal" action="{{route('simpandata')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
          <div class="form-group"><label class="col-lg-2 control-label">Kode Tugas</label>
            <div class="col-lg-10"><input type="text" name="kelas" placeholder="Kelas" class="form-control"></div>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group"><label class="col-lg-2 control-label">Nama Tugas</label>
            <div class="col-lg-10"><input type="text" name="kelas" placeholder="Kelas" class="form-control"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection