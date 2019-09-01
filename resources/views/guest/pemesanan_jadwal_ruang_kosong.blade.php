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
                        <li class="breadcrumb-item"><a href="#">Pemesanan Jadwal Ruang Kosong</a></li>
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
    <!-- Section Title -->
    <div class="section-heading">
      <h5>Pemesanan Jadwal Ruang Kosong</h5>
    </div>

    <!-- Contact Form Area -->
    <div class="contact-form-area">
        <hr>
        @if(Session::has('flash_message'))
            <div class="row">   
            <div class="col-lg-12">     
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
            </div>
        @endif 

        <div class="row">
            <div class="col-lg-12">              
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>

        <form method="POST" action="{{ route('simpanpemesanan_jadwal_ruang_kosong')}}" enctype="multipart/form-data" novalidate="novalidate">
            {!! csrf_field() !!} 
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="asal_organisasi">Asal Organisasi</label>
                        <select name="asal_organisasi" class="form-control">
                            @foreach($organisasi as $os)
                            <option value="{{$os->organisasi}}">{{$os->organisasi}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>              
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama_penanggung_jawab">Nama Penanggung Jawab</label>
                        <input type="text" class="form-control" id="nama_penanggung_jawab" name="nama_penanggung_jawab" placeholder="Nama Penanggung Jawab">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>
                </div>   
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" class="form-control" name="ruangan" id="ruangan" placeholder="Ruangan">
                    </div>
                </div>                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="dari">Dari</label>
                        <select name="dari" class="form-control">
                            @foreach($jam as $jm)
                            <option value="{{$jm->nama_jam}}">{{$jm->nama_jam}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>    
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="sampai">Sampai</label>
                        <select name="sampai" class="form-control">
                            @foreach($jam as $jm)
                            <option value="{{$jm->nama_jam}}">{{$jm->nama_jam}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>                                          
                <div class="col-12">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="message" cols="30" rows="10" placeholder="Keterangan Tujuan Peminjaman Ruangan"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn mag-btn mt-30" type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>

    </div>

    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
    <!-- Section Title -->
    <div class="section-heading">
      <h5>Daftar Pemesanan</h5>
    </div>

    <!-- Contact Form Area -->
    <div class="contact-form-area">
        <hr>
        <div class="table-responsive">
            <table id="myTable" class="table display" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Asal Organisasi</th>
                    <th>Nama Penanggung Jawab</th>
                    <th>Kontak</th>
                    <th>Ruangan</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                </tr>                           
                </thead>
                <tbody>
                <?php $no=0; ?>
                @foreach ($mahasiswa as $row)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$row->asal_organisasi}}</td>
                    <td>{{$row->nama_penanggung_jawab}}</td>
                    <td>{{$row->kontak}}</td>
                    <td>{{$row->ruangan}}</td>
                    <td>{{date('d-m-Y', strtotime($row->tanggal)) }}</td>
                    <td>{{$row->dari}} s.d {{$row->sampai}}</td>
                    <td>{{$row->keterangan}}</td>       
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>

</div>
@endsection