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
                <h2>Edit Form</h2>
                <p>Form edit untuk tugas ready yang akan dikerjakan mahasiswa magang</p>
            </div>
            <br><br><br>
            <div class="card-body">
                <form action="/update_pt" method="POST">
                    {{ csrf_field() }}

                    @foreach ($editpt as $edt)
                    <input type="hidden" name="kode_tugas" value="{{ $edt->kode_tugas }}"> <br />

                    
                    <!-- @if($edt->status == null) -->
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Kode Tugas</label>
                        <div class="col-md-10">
                            <input type="text" required="required" class="form-control" name="kode_tugas" value="{{ $edt->kode_tugas }}" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Nama Tugas</label>
                        <div class="col-md-10">
                            <input type="text" required="required" class="form-control" name="nama_tugas" value="{{ $edt->nama_tugas }}">
                        </div>
                    </div>
                    <!-- @endif -->
                    
                    <input type="hidden" name="id" value="{{ $edt->kode_tugas }}"> <br />
                    @endforeach

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection