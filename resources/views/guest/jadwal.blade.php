@extends('_layouts.base')
@section('judulawal') 
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/FH.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>SIJADWAL</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('menupengumuman') 

<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Jadwal</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-12 col-xl-12">
    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
        <div style="width:100%" class="table-responsive">
            <h4 style="text-align: center;">Download Jadwal</h4>
            <hr>
              <select class="form-control" name="forma" onchange="location = this.value;">
                  <option value="">Silahkan Pilih....</option>                  
                  <option value="{{route('exportjadwalsimpan',1)}}">2017/2018 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',2)}}">2017/2018 - GENAP</option>  
                  <option value="{{route('exportjadwalsimpan',3)}}">2018/2019 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',4)}}">2018/2019 - GENAP</option>     
                  <option value="{{route('exportjadwalsimpan',5)}}">2019/2020 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',6)}}">2019/2020 - GENAP</option>   
                  <option value="{{route('exportjadwalsimpan',7)}}">2020/2021 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',8)}}">2020/2021 - GENAP</option>
                  <option value="{{route('exportjadwalsimpan',9)}}">2021/2022 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',10)}}">2021/2022 - GENAP</option>
                  <option value="{{route('exportjadwalsimpan',11)}}">2022/2023 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',12)}}">2022/2023 - GENAP</option>    
                  <option value="{{route('exportjadwalsimpan',13)}}">2023/2024 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',14)}}">2023/2024 - GENAP</option>    
                  <option value="{{route('exportjadwalsimpan',15)}}">2024/2025 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',16)}}">2024/2025 - GENAP</option> 
                  <option value="{{route('exportjadwalsimpan',17)}}">2025/2026 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',18)}}">2025/2026 - GENAP</option>   
                  <option value="{{route('exportjadwalsimpan',19)}}">2026/2027 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',20)}}">2026/2027 - GENAP</option>                                                  
                  <option value="{{route('exportjadwalsimpan',21)}}">2027/2028 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',22)}}">2027/2028 - GENAP</option>   
                  <option value="{{route('exportjadwalsimpan',23)}}">2028/2029 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',24)}}">2028/2029 - GENAP</option> 
                  <option value="{{route('exportjadwalsimpan',25)}}">2029/2030 - GANJIL</option>
                  <option value="{{route('exportjadwalsimpan',26)}}">2029/2030 - GENAP</option>                                                                                                                                       

              </select>           
        </div>
    </div>
</div>


<div class="col-12 col-xl-12">
    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
        <div style="width:100%" class="table-responsive">
            <h1 style="text-align: center;">Jadwal</h1>
            <hr>
            <table id="myTable" class="table display" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Sks</th>
                    <th>Ruang</th>
                    <th>PRODI</th>
                    <th>Semester</th> 
                </tr>                           
                </thead>
                <tbody>
                <?php $no=0; ?>
                @foreach ($data as $row)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$row->hari}}</td>
                    <td>{{$row->jam}} - {{$row->jam_selesai}}</td>
                    <td>{{$row->nama_matkul}}</td>
                    <td>{{$row->kelas}}</td>
                    <td>{{$row->sks}}</td>
                    <td>{{$row->ruangan}}</td>
                    <td>{{$row->prodi}} - {{$row->program}}</td>
                    <td>{{$row->semester}}</td>                            
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-12 col-xl-12">
    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
        <div style="width:100%" class="table-responsive">
            <h3 style="text-align: center;">Daftar Ruangan Kosong: {{$hari[ date('N') ]}}, {{$tgl}}</h3>
            <hr>
            <table id="myTable2" class="table display" style="width:100%">
                <thead>
                <select>
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                </select>
                <tr>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Waktu Kosong</th>
                </tr>                           
                </thead>
                <tbody>
                <?php $awalrk = 1; ?>
                @foreach($datark as $rg)    
                  <tr>
                    <td>{{$awalrk}}</td>
                    <td>{{$rg->ruangan}}</td>
                    <td>
                    @if($rg->hari != "Jumat")
                      @if(count($jam) > 0)
                      @foreach($jam as $jm)
                        @if($jm->nama_jam == '08:00:00')
                          08:00 - 10:30, 
                        @elseif($jm->nama_jam == '10:30:00')
                          10:30 - 13:00,    
                        @elseif($jm->nama_jam == '13:30:00')
                          13:30 - 16:00, 
                        @elseif($jm->nama_jam == '16:00:00')
                          16:00 - 18:30,                                          
                        @elseif($jm->nama_jam == '17:00:00')
                          17:00 - 19:30,  
                        @elseif($jm->nama_jam == '19:30:00')
                          19:30 - 21:00,                                                             
                        @else
                          {{$jm->nama_jam}}
                        @endif
                      @endforeach
                      @else
                      Tidak Tersedia
                      @endif
                    @else
                      @if(count($jamjumat) > 0)
                      @foreach($jamjumat as $jm)
                        @if($jm->nama_jam == '08:00:00')
                          08:00 - 09:40, 
                        @elseif($jm->nama_jam == '09:50:00')
                          09:50 - 11:30,    
                        @elseif($jm->nama_jam == '14:00:00')
                          14:00 - 16:00, 
                        @elseif($jm->nama_jam == '16:00:00')
                          16:00 - 18:30,                                          
                        @elseif($jm->nama_jam == '17:00:00')
                          17:00 - 19:30,  
                        @elseif($jm->nama_jam == '19:30:00')
                          19:30 - 21:00,                                                             
                        @else
                          {{$jm->nama_jam}}
                        @endif
                      @endforeach
                      @else
                      Tidak Tersedia
                      @endif
                    @endif
                    </td>                  
                  </tr>
                <?php  ++$awalrk; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
