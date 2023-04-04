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
                <h2>Beri Nilai</h2>
                <p>Memberi nilai tugas untuk mahasiswa magang</p>
            </div>
            <br><br><br>
            <form method="post" action="/nilai/stornilai">

                {{ csrf_field() }}
                @foreach ($nl as $edt)
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" name="nilai" class="form-control" value="{{ $edt->nilai }}" >
                </div>

                <div class="form-group">
                    <label>Komentar</label>
                    <input type="text" name="komentar" class="form-control" value="{{ $edt->komentar }}" ></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                @endforeach
            </form>

        </div>
    </div>
</div>

@endsection