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
</style>



<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="hello">
                <h2>Tambah Tugas</h2>
                <p>Form tambah tugas untuk mahasiswa magang</p>
            </div>
            <br><br><br>
            <form method="post" action="/add_pt/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Kode Tugas</label>
                            <input type="text" name="kode_tugas" class="form-control" placeholder="Kode Tugas..">
                        </div>
 
                        <div class="form-group">
                            <label>Nama Tugas</label>
                            <textarea name="nama_tugas" class="form-control" placeholder="Nama Tugas .."></textarea>
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>

        </div>
    </div>
</div>

@endsection