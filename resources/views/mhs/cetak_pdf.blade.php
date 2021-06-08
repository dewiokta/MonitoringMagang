<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cetak Laporan Magang</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        /* table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        } */
        /* .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        } */
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
        @foreach ($cetak as $t)
            <td align="left" style="width: 40%;">
                <h3>{{ $t->nama_pt }}</h3>
                <pre>
                {{ $t->alamat }}
<br /><br />
{{ $t->pembimbing }}
</pre>


            </td>
            <td align="center">
                <img src="data:image/png;base64,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" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>Politeknik Negeri malang</h3>
                <pre>
                {{ $t->nip }}
                {{ $t->nama_dosen }}
                {{ $t->jurusan }}
                {{ $t->jabatan }}
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Laporan Data Mahasiswa Magang</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nama Tugas</th>
            <th>Nilai</th>
            <th>Komentar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $t->nama_mhs }}</td>
            <td>{{ $t->nim }}</td>
            <td>{{ $t->nama_tugas }}</td>
            <td> {{ $t->nilai }}</td>
            <td>{{ $t->komentar }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Company Slogan
            </td>
        </tr>

    </table>
</div>
</body>
</html>