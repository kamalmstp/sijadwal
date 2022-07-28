@extends('_layouts.admin')

@section('content')
<?php
function serialize_ke_string($serial)
{
  $request = unserialize($serial);
  return implode(', <br/>', $request);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-12">
      <!-- Approach -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Hasil Jadwal</h6>
        </div>
        <div class="card-body">                    
        <hr>
        @if(Session::has('flash_message'))
          <div class="row">   
            <div class="col-lg-12">     
              <div class="alert alert-success">
                <em> {!! session('flash_message') !!}</em>
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
                        <th>Dosen</th> 
                        <th>Jumlah Mahasiswa</th>
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
                            <td>{{$row->dosen1}}, {{$row->dosen2}}, {{$row->dosen3}} {{$row->dosen4}}, {{$row->dosen5}}, {{$row->dosen6}}</td> 
                            <td>{{$row->jumlah_mahasiswa}}</td>
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
