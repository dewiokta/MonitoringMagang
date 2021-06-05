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
</style>



<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="hello">
                <h2>Dayly Report</h2>
                <p>Form report harian tugas mahasiswa</p>
            </div>
            <br><br><br>
            <form method="post" action="/add_progres/storee">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Kode Progres</label>
                    <input type="text" name="kd_progres" class="form-control" placeholder="Kode Progres..">
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nimmm" class="form-control" placeholder="NIM..">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                </div>
                <div class="form-group">
                    <label>Detail</label>
                    <textarea name="detail" class="form-control" placeholder="Detail .."></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>

@endsection