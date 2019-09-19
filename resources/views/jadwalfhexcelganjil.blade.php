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
                    <th style="text-align: left; font-family: arial; font-size: 14px; font-weight: bold; width: 90px; ">
                    JADWAL KULIAH SEMESTER {{$id_tahunajaran->semester}} TAHUN  AJARAN {{$id_tahunajaran->tahun_ajaran}} PROGRAM S1 REGULER FAKULTAS HUKUM ULM
                    </th>
                </tr>
                <tr >
                    <th style="text-align: left; font-family: arial; font-size: 14px; font-weight: bold;">
                     BERLAKU MULAI {{$jadwalguest->tgl_berlaku}}
                    </th>
                </tr>
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    
                </tr>                    
                <tr style="border-color: #000;">
                    <th style="width: 18px;">HARI/JAM</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  I</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  III</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  V</th>
                    <th style="text-align: center; font-family: arial; font-size: 10px;">SEMESTER  VII</th>
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
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td  style="font-weight: bold;">{{$hari[$i]}}</td>
                </tr>
                @foreach($jadwalfh[$i] as $s)
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td>{{ $s->jam }}</td>
                </tr>
                @endforeach
             @endfor

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td ></td>
                </tr> 
                
                <tr></tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$jadwalguest->tgl_ttd}}</td>
                </tr>       

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>ub.  Wakil Dekan Bidang Akademik</td>
                </tr>  

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td></td> 
                    <td>Dekan,</td>                   
                </tr>   
                
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                </tr>
                
                <tr></tr>

                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$jadwalguest->dekan}}</td>
                </tr>                                                                      
                <tr style="text-align: center; font-family: arial; font-size: 10px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>NIP. {{$jadwalguest->nip_dekan}}</td>
                </tr>

            </tbody>
        </table>
    </div>
 
</body>
</html>