<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {}
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table,
        th,
        td {
            border: 1px solid #000000;
            text-align: center;
        }
        th {
            background-color: 	#ffffff;
            text-align: center;
            color: black;
        }
        td {}
        br {
            margin-bottom: 5px !important;
        }
        .judul {
            text-align: center;
        }
        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }
        .pemko {
            width: 100px;
        }
        .logo {
            float: left;
            margin-right: 0px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }
        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }
        hr {
            margin-top: 0%;
            height: 1px;
            background-color: black;
        }
        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }
        .text-center{
            text-align:center;
        }
    </style>
</head>

<body>
   <div class="text-center">
   <p><img src="admin/img/sma.png" width="100">
   <br>Jl. Kapten Halim No.1, Pasawahan, Kec. Pasawahan, Kabupaten Purwakarta, Jawa Barat 41172
   <hr>
    </p>
   </div>

    <div class="container">
        <div class="isi">
            <h4 style="text-align:center;">LAPORAN DATA TUGAS </h4>
            <br>            
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Pertemuan</th>
                                    <th>Tugas</th>
                                    <th>Batas Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$d->pertemuan->mapel->mapel}}</td>
                                  <td>{{$d->pertemuan->pertemuan}}</td>
                                  <td>{{$d->deskripsi}}</td>
                                  <td>{{$d->batas_waktu}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
            <br>
            <br>
            <div class="ttd">
                <h5 style="margin:0px;">
                    <p style="margin:0px;">Purwakarta, {{$tgl}}</p>
                </h5>
                <h5  style="margin:0px;">Kepala Sekolah</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline; margin:0px;">{{$kepsek->kepsek}}</h5>
            </div>
        </div>
    </div>
</body>
</html>