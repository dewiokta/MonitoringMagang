@extends('master')

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
        <p>Tugas yang belum dikerjakan</p>
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
              <th>Kode Tugas</th>
              <th>Nama Tugas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tgs as $t)
            @if($t->status == null)
            <tr>
              <td> {{ $t->kode_tugas }} </td>
              <td> {{ $t->nama_tugas }} </td>
              <td>
                <!-- <a href="/" class="btn btn-primary">Submit</a> -->

                <form action="/upload_file" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="file" name="file">
                  <input type="submit" value="Upload" class="btn btn-primary">
                </form>
              </td>
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