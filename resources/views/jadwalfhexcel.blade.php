<html>
<head>
    <title>Export Laporan Excel Pada Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
    <div class="container">
        <table class='table table-bordered' >
            <thead>
                <tr >
                    <th colspan="13" style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold; width: 90px; ">
                    JADWAL KULIAH SEMESTER {{$id_tahunajaran->semester}} TAHUN  AJARAN {{$id_tahunajaran->tahun_ajaran}} PROGRAM S1 REGULER FAKULTAS HUKUM ULM
                    </th>
                </tr>
                <tr >
                    <th colspan="13" style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold;">
                     BERLAKU MULAI {{$jadwalguest->tgl_berlaku}}
                    </th>
                </tr>
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13"></td>
                </tr>                    
                <tr >
                    <th style="width: 18px; border-color: #000;">HARI/JAM</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  II</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  IV</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  VI</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  VIII</th>
                </tr>                             
            </thead>
            <tbody>
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Senin</td>
                </tr>                
                @foreach($jadwalfh as $s)
            @if(($s->hari == "Senin") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Senin") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Senin") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif


            @if(($s->hari == "Senin") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Selasa</td>
                </tr>                
                @foreach($jadwalfh as $s)
            @if(($s->hari == "Selasa") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Selasa") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Selasa") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif


            @if(($s->hari == "Selasa") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Rabu</td>
                </tr>                
                @foreach($jadwalfh as $s)
            @if(($s->hari == "Rabu") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Rabu") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Rabu") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif


            @if(($s->hari == "Rabu") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Kamis</td>
                </tr>                
                @foreach($jadwalfh as $s)
            @if(($s->hari == "Kamis") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Kamis") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Kamis") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif


            @if(($s->hari == "Kamis") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif
                @endforeach

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13" style="font-weight: bold;">Jumat</td>
                </tr>                
                @foreach($jadwalfh as $s)
            @if(($s->hari == "Jumat") and ($s->jam == "08:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>08.00-10.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Jumat") and ($s->jam == "10:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>10.30-13.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif

            @if(($s->hari == "Jumat") and ($s->jam == "13:30:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>13.30-16.00</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif


            @if(($s->hari == "Jumat") and ($s->jam == "16:00:00") and ($s->semester == "SEMESTER II") and ($s->semester == "SEMESTER IV")  and ($s->semester == "SEMESTER VI") and ($s->semester == "SEMESTER VIII"))
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>16.00-18.30</td>
                    @if($s->semester == "SEMESTER II")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif 
                    @if($s->semester == "SEMESTER IV")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VI")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                    @if($s->semester == "SEMESTER VIII")
                    <td>{{$s->nama_matkul}} ({{$s->kelas}}) ({{$s->ruangan}})</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endif
                @endforeach



                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="13"></td>
                </tr> 

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="10">KETERANGAN:</td>
                    <td colspan="10">{{$jadwalguest->tgl_ttd}}</td>
                </tr>       

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="3"></td>
                    <td colspan="4"></td>
                    <td colspan="2"></td> 
                    <td></td> 
                    <td>Dekan,</td>                   
                </tr>    

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="3"></td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>ub.  Wakil Dekan Bidang Akademik</td>
                </tr>  

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="3"></td>
                    <td colspan="4"></td>
                    <td colspan="2"></td> 
                    <td></td> 
                    <td>Dekan,</td>                   
                </tr>   
                
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="2"></td>                 
                </tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="2"></td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$jadwalguest->dekan}}</td>
                </tr>                                                                      
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="1">dst</td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NIP. {{$jadwalguest->nip_dekan}}</td>
                </tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="4"></td>
                </tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td colspan="5"></td>
                </tr>                

            </tbody>
        </table>
    </div>
 
</body>
</html>