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
          <h6 class="m-0 font-weight-bold text-primary">Kelola Jadwal</h6>
        </div>
        <div class="card-body">
        <div class="row">
        <form role="form" method="POST" action="{{ route('tambahkelolajadwal')}}" enctype="multipart/form-data">
        {!! csrf_field() !!}                            
            <input type="hidden" name="id_tahunajaran" value="{{$th}}">  
            <button type="submit" class="btn btn-success">New</button>                        
        </form> &nbsp; &nbsp;    
        <a href="../fhjadwal.xlsx" class="btn btn-primary">Download Template</a> &nbsp;             
        <a href="{{route('kelolajadwal_import')}}" class="btn btn-primary">Import Excel</a> &nbsp; 
        <!--<a href="{{route('exportjadwal',$th)}}" class="btn btn-primary">Export Excel</a>&nbsp;-->
        
        {!! Form::open(['method' => 'DELETE', 'route' => ['deletekelolajadwalsemua', $th] ]) !!}
          
         <button type="submit" onclick="return confirm('Apa Kamu Yakin Ingin Menghapus Data Ini?')"
         style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;
          overflow: hidden; padding: 10px 0px 0px 0px; ">
          <i class="fa fa-trash" ></i> &nbsp;<span style="color: #000; font-weight: bold;">Delete Semua</span></button>
        {!! Form::close() !!}         

      </div>                           
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
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Ruang</th>
                        <th>Prodi</th>
                        <th>Jumlah Mahasiswa</th>
                        <th>Operation</th> 
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
                            <td>{{$row->ruangan}}</td>
                            <td>{{$row->prodi}}</td>
                            <td>{{$row->jumlah_mahasiswa}}</td>
                            <td>
                                <a class="fa fa-edit" href="{{ route('editkelolajadwal', $row->id) }}" style="color: #000;">&nbsp;Edit</a>&nbsp;

                                {!! Form::open(['method' => 'DELETE', 'route' => ['deletekelolajadwal', $row->id] ]) !!}
                                  
                                 <button type="submit" onclick="return confirm('Apa Kamu Yakin Ingin Menghapus Data Ini?')"
                                 style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;
                                  overflow: hidden; padding: 0px; ">
                                  <i class="fa fa-trash" ></i> &nbsp;<span style="color: #000; font-weight: bold;">Delete</span></button>
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
