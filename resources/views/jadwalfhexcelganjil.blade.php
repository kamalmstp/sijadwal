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
                    <th style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold; width: 90px; ">
                    JADWAL KULIAH FAKULTAS HUKUM ULM
                    </th>
                </tr>
                <tr >
                    <th style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold;">
                    SEMESTER {{$id_tahunajaran->semester}} TAHUN  AJARAN {{$id_tahunajaran->tahun_ajaran}}
                    </th>
                </tr>
                <tr >
                    <th style="text-align: center; font-family: arial; font-size: 14px; font-weight: bold;">
                    PROGRAM S1 REGULER FAKULTAS HUKUM ULM
                    </th>
                </tr>
                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    
                </tr>                    
                <tr style="border-color: #000;">
                    <th style="text-align: center; vertical-align: middle; width: 12px; font-weight: bold;">HARI</th>
                    <th style="text-align: center; vertical-align: middle; font-weight: bold; width: 17px;">JAM</th>
                    <th style="text-align: center; vertical-align: middle; font-weight: bold; width: 25px;">MATA KULIAH</th>
                    <th style="text-align: center; vertical-align: middle; font-weight: bold; font-size: 11px;">KLS</th>
                    <th style="text-align: center; vertical-align: middle; font-weight: bold; font-size: 11px;">SKS</th>
                    <th style="text-align: center; vertical-align: middle; font-weight: bold; font-size: 11px;">SEM</th>
                    <th style="text-align: center; vertical-align: middle; font-weight: bold; font-size: 11px;">RUANG</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            $hari = array( 1 => 'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat'
            );
            ?>
            
            @for($i=1;$i<=5;$i++)
            <?php
                $jam = \App\Jadwalfh::where('id_tahunajaran', $id_tahunajaran->id_tahunajaran)->where('hari', $hari[$i])->groupBy('jam')->orderBy('jam')->get(['jam']);
            ?>
                @foreach ($jam as $j)
                    <?php 
                        $jam1 = \App\Jadwalfh::where('id_tahunajaran', $id_tahunajaran->id_tahunajaran)->where('hari', $hari[$i])->where('jam',$j->jam)->get();
                    ?>
                    @foreach ($jam1 as $r)
                    <tr style="text-align: center; font-family: arial; font-size: 11px;">
                        <td style="text-align: center; vertical-align: middle; font-weight: bold;">{{ $hari[$i] }}</td>
                        <td style="text-align: center;">{{ $r->jam." - ".$r->jam_selesai }}</td>
                        <td>{{ $r->nama_matkul }}</td>
                        <td style="text-align: center;">{{ $r->kelas }}</td>
                        <td style="text-align: center;">{{ $r->sks }}</td>
                        <td style="text-align: center;">{{ $r->kelas }}</td>
                        <td style="text-align: center;">{{ $r->ruangan }}</td>
                    </tr>
                    @endforeach
                    <tr><td></td></tr>
                @endforeach
            @endfor


                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    <td ></td>
                </tr> 
                
                <tr></tr>

                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$jadwalguest->tgl_ttd}}</td>
                </tr>       

                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>A.n Dekan,</td>
                </tr>  

                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td>Ketua Program Studi Ilmu Hukum</td>                   
                </tr>   
                
                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                </tr>
                
                <tr><td></td></tr>
                <tr><td></td></tr>

                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$jadwalguest->dekan}}</td>
                </tr>                                                                      
                <tr style="text-align: center; font-family: arial; font-size: 11px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NIP. {{$jadwalguest->nip_dekan}}</td>
                </tr>

                <tr><td></td></tr>

                <!-- <tr><td>Catatan :</td></tr>
                <tr><td>1.  Untuk Mata Kuliah Pendidikan Agama</td></tr>
                <tr><td>    Katholik, Protestan, Hindu & Budha</td></tr>
                <tr><td>    akan dijadwalkan kemudian, diharapkan</td></tr>
                <tr><td>    melapor ke bagian Akademik.</td></tr>
                <tr><td>2.  Dilarang Melakukan Perubahan Jadwal</td></tr>
                <tr><td>    Atau Penggabungan Kelas.</td></tr>
                <tr><td>3.  Mahasiswa Memilih Sendiri Kelas</td></tr>
                <tr><td>    A/B/C/D/E/F Untuk Setiap Mata Kuliah</td></tr>
                <tr><td></td></tr> -->
            </tbody>
        </table>
    </div>
 
</body>
</html>