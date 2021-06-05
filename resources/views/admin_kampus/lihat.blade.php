@extends('masterk')

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
                <h2>Data Mahasiswa</h2>
                <p>Data Mahasiswa Yang Sedang Magang </p>
            </div>
            <br>
            <div class="card-body">
                

                    @foreach ($lht as $m)
                        <label for="name" class="col-md-2 col-form-label text-md-right">Kode Progres    :</label>
                        {{ $m->kd_progres }}                <br> 
                        <!-- <label for="name" class="col-md-2 col-form-label text-md-right">NIM             :</label>
                        {{ $m->nimmm }}               <br>  -->
                        <label for="name" class="col-md-2 col-form-label text-md-right">Tanggal         :</label>
                        {{ $m->tanggal }}<br>
                        <label for="name" class="col-md-2 col-form-label text-md-right">Detail          :</label>
                        {{ $m->detail }}<br>
                    <br><br><br>
                    
                   @endforeach

                    
                   
                    
                    
                    

                
            </div>
        </div>
    </div>
</div>

@endsection