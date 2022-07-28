@extends('_layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-12">
      <!-- Approach -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Pemesanan Ruangan Kosong</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('tambahpemesanan_ruangan_kosong')}}" class="btn btn-success">New</a>
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
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: #000;">
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
                    <th>Operation</th>
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
                    <td>
                        
                        &nbsp;&nbsp;<a class="fa fa-edit" href="{{ route('editpemesanan_ruangan_kosong', $row->id)}}" style="color: #000;">&nbsp;Edit</a>&nbsp;&nbsp;

                        {!! Form::open(['method' => 'DELETE', 'route' => ['deletepemesanan_ruangan_kosong', $row->id] ]) !!}
                        <button type="submit" onclick="return confirm('Apa Kamu Yakin Ingin Membatalkan Ini?')"
                         style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;
                          overflow: hidden; padding: 0px; ">
                          <i class="fa fa-trash" ></i> <span style="color: #000; font-weight: bold;">Batal</span></button>
                        {!! Form::close() !!}   
                                                         
                    </td>                          
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
