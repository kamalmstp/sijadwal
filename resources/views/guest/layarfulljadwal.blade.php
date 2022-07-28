<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>FH - SIJADWAL</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/logounlam.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('styleee.css')}}">

    <!-- DataTables CSS -->
    <link href="{{asset('dt.css')}}" rel="stylesheet">

</head>

<body >
  
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel" >

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        @if($jmldata > 0)
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                           
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data as $jdwksg) 
                                        <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                            @else
                                <h1 style="margin-top: 222px; margin-bottom: 221px;">JADWAL HARI INI KOSONG</h1>
                            @endif                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($jmldata2 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                           
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data2 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmldata3 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                          
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data3 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmldata4 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                           
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data4 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmldata5 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                            
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data5 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>

                                                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif  
        @if($jmldata6 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                           
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data6 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmldata7 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                          
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data7 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmldata8 > 0)
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-xl-12" style="margin-top: 5px;">
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                        
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">
                                Jadwal Hari Ini: 
                                {{$tes}}, {{$tgl}}
                            </a>
                            <div class="table-responsive">
                                <table id="myTable" class="table" style="margin-top: 10px; border: 2px solid black;">
                                    <thead>
                                    <tr >
                                        <th style="border: 2px solid black;">No</th>
                                        <th style="border: 2px solid black;">Hari</th>
                                        <th style="border: 2px solid black;">Jam</th>
                                        <th style="border: 2px solid black;">Jam Selesai</th>
                                        <th style="border: 2px solid black;">Mata Kuliah</th>
                                        <th style="border: 2px solid black;">Sks</th>
                                        <th style="border: 2px solid black;">Ruang</th>
                                        <th style="border: 2px solid black;">PRODI</th>
                                        <th style="border: 2px solid black;">Semester</th> 
                                    </tr>                            
                                    </thead>
                                        <tbody>
                                        <?php $j=1; ?>
                                        @foreach($data8 as $jdwksg) 
                                          <tr>
                                          <td style="font-size: 13px; border: 2px solid black; font-weight: bold;">{{$j}}</td>
                                          <td style="font-size: 13px; border: 2px solid black; ">{{$jdwksg->hari}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->jam_selesai}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->nama_matkul}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->sks}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">{{$jdwksg->ruangan}}</td>
                                          <td style="font-size: 13px; border: 2px solid black;">
                                            {{$jdwksg->prodi}}
                                          </td>                                           
                                          <td style="font-size: 13px; border: 2px solid black;">
                                              {{$jdwksg->semester}}
                                          </td>             
                                        </tr>  
                                        <?php $j++; ?>
                                        @endforeach   
                                        </tbody>
                                </table>
                            </div>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
</body>

</html>