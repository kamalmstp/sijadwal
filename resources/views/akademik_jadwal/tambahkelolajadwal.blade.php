@extends('_layouts.admin')

@section('content')
<?php
function serialize_ke_string($serial)
{
    $request = unserialize($serial);
    return implode(', ', $request);
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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Kelola Jadwal</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">JADWAL</h3>
            </div>
            <hr>
            @if(Session::has('flash_message'))
              <div class="alert alert-success" style="text-align: center; color: #fff;"><em> {!! session('flash_message') !!}</em>
              </div>
              <hr>
            @endif 
            <div class="row">
                <div class="col-lg-12">              
                    @include ('errors.list') {{-- Including error file --}}
                </div>
            </div> 
            <form method="POST" action="{{ route('simpankelolajadwal')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}    
            <input type="hidden" name="id_tahunajaran" value="{{$th}}"> 
            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="prodi">Nama Prodi:</label>
                    <input type="text" name="prodi" class="form-control" >        
                </div> 
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="program">Program:</label>
                    <input type="text" name="program" class="form-control" >  
                </div> 
            </div>
            </div> 

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="kode_matkul">Kode Mata Kuliah:</label>
                    <input type="text" name="kode_matkul" class="form-control" >        
                </div> 
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_matkul">Nama Mata Kuliah:</label>
                    <input type="text" name="nama_matkul" class="form-control" >  
                </div> 
            </div>
            </div>                     

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="sks">SKS:</label>
                    <input type="text" name="sks" class="form-control" >        
                </div> 
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" class="form-control" >  
                </div> 
            </div>
            </div> 

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="semester">Semester:</label>
                    <input type="text" name="semester" class="form-control" >     
                </div> 
            </div> 
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="hari">Hari</label>
                    <select class="form-control" tabindex="1"  name="hari" class="span8">
                        @foreach($hari as $hr)
                        <option value="{{$hr->nama_hari}}">{{$hr->nama_hari}}</option>
                        @endforeach 
                    </select>
                </div> 
            </div>
            </div> 

            <div class="row"> 
            <div class="col-md-6">      
                 <div class="form-group">
                    <label for="jam">Jam</label>
                    <select class="form-control" tabindex="1"  name="jam" class="span8">
                        @foreach($jam as $jm)
                        <option value="{{$jm->nama_jam}}">{{$jm->nama_jam}}</option>
                        @endforeach 
                    </select>
                </div>
            </div> 
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <select class="form-control" tabindex="1"  name="jam_selesai" class="span8">
                        @foreach($jam as $jm)
                        <option value="{{$jm->nama_jam}}">{{$jm->nama_jam}}</option>
                        @endforeach 
                    </select>
                </div>
            </div>
            </div>

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="ruangan">Ruangan:</label>
                    <input type="text" name="ruangan" class="form-control" >  
                </div> 
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dosen1">Dosen 1:</label>
                    <input type="text" name="dosen1" class="form-control" >  
                </div> 
            </div>
            </div>

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="dosen2">Dosen 2:</label>
                    <input type="text" name="dosen2" class="form-control" >  
                </div>  
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dosen3">Dosen 3:</label>
                    <input type="text" name="dosen3" class="form-control" >  
                </div> 
            </div>
            </div>

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="dosen4">Dosen 4:</label>
                    <input type="text" name="dosen4" class="form-control" >  
                </div>  
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dosen5">Dosen 5:</label>
                    <input type="text" name="dosen5" class="form-control" >  
                </div> 
            </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dosen6">Dosen 6:</label>
                    <input type="text" name="dosen6" class="form-control" >  
                </div> 
            </div>

            <div class="row"> 
            <div class="col-md-6">      
                <div class="form-group">
                    <label for="jumlah_mahasiswa">Jumlah Mahasiswa:</label>
                    <input type="text" name="jumlah_mahasiswa" class="form-control" >  
                </div>  
            </div> 

            </div>


            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    Save
                </button>
            </div>
            </form>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
