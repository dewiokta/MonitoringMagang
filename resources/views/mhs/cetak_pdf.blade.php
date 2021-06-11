<!DOCTYPE html>
<html>

<head>
    <title>Cetak PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <center>
        <p style="color: #008080;"><b style="font-size: 24px;">PT. Pertamina </b><br> Jl. Kusuma Bangsa, Jakarta Pusat <br> Pembimbing : Sugiantoro Sugik
        </p>
    </center>
    <hr style="color: gray;">
    <br>
    <h4 style="color:  #008080;"> Laporan Mahasiswa Magang</h4><br>
    <table class="table">
        <tbody style="color: gray;">
            @foreach($cetak_bio as $b)
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $b->nama_mhs }}</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>{{ $b->nim }}</td>
            </tr>
            <tr>
                <td>Nama Tugas</td>
                <td>:</td>
                <td>{{ $b->nama_tugas }}</td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>:</td>
                <td>{{ $b->nilai }}</td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>{{ $b->komentar }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <br><br><br>

    <table class="table">
        <thead>
            <tr style=" color: gray;">
                <th>Tanggal</th>
                <th>Aktivitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cetak_progres as $p)
            <tr style="color: gray;">
                <td>{{ $p->tanggal }}</td>
                <td>{{ $p->detail }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br><br>
    <h3 style="font-size: 16px; text-align: center; color: gray;"><b>Hormat Kami,</b></h3>
    <br><br><br><br>
    <h4 style="font-size: 14px; text-align: center; color: gray;">PT. Pertamina</h4>
</body>

</html>