@extends('master')

@section('konten')

<style type="text/css">
    div.hello {
        text-align: center;
    }

    div.card-body {
        background-color: white;
    }
</style>



<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="hello">
                <h2>Hello Jaya, Welcome Back</h2>

                <script type='text/javascript'>
                    window.setTimeout("hari()", 0)

                    function hari() {
                        var namah = new Array("Sunday", "Monday", "Tuesday ", "Wednesday ", "Thursday ", "Friday ", "Saturday");
                        var namab = new Array("January", "Februariy", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember");
                        var tanggal = new Date();
                        setTimeout("hari()", 0);
                        document.getElementById("dino").innerHTML = namah[tanggal.getDay()] + ", " + tanggal.getDate() + " " + namab[tanggal.getMonth()] + " " + tanggal.getFullYear();
                    }
                </script>
                <div style="color : black;font-size: 12pt" id='dino'></div>
                <br><br><br><br>
                <h4>Daily Report</h4>
                <br>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kode Progres </th>
                                <th>Tanggal </th>
                                <th>Detail </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rpt as $t)

                            <tr>
                                <td> {{ $t->kd_progres }} </td>
                                <td> {{ $t->tanggal }} </td>
                                <td> {{ $t->detail }} </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-9"></div> <br>
        <div class="col-md-3">
            <a href="/add_progres" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
        </div>
    </div>
</div>



@endsection