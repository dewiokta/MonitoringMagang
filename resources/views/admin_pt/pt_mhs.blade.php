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
        <h2>Data Mahasiswa Magang</h2>
        <p>PT Pertamina</p>
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
              <th>NIM</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Jurusan</th>
              <th>Tugas Selesai</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mhss as $m)
            @if($m->kode_pt == 3331)
            <tr>
              <td> {{ $m->nim }} </td>
              <td> {{ $m->nama_mhs }} </td>
              <td> {{ $m->ttl }} </td>
              <td> {{ $m->jurusan }} </td>
              <td> {{ $m->nama_tugas }} </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection