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
          <h6 class="m-0 font-weight-bold text-primary">Ubah Data Mata Kuliah</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Mata Kuliah</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updatematakuliah', $editmatkul->id_matkul)}}"enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="kode_matkul">Kode Mata Kuliah</label>
                    <input class="form-control" type="text" value="{{$editmatkul->kode_matkul}}" name="kode_matkul" required>
                   
                </div>
                <div class="form-group">
                    <label for="nama_matkul">Nama Mata Kuliah</label>
                    <input class="form-control" type="text" value="{{$editmatkul->nama_matkul}}" name="nama_matkul" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input class="form-control" type="text" value="{{$editmatkul->kelas}}" name="kelas">
                </div>                              
                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input class="form-control" type="number" value="{{$editmatkul->sks}}" name="sks" required>
                </div>  

                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select class="form-control" tabindex="1"  name="semester[]" class="span8" multiple="multiple" id="semester" >                                    
                        <option value="SEMESTER I">SEMESTER I</option> 
                        <option value="SEMESTER II">SEMESTER II</option> 
                        <option value="SEMESTER III">SEMESTER III</option> 
                        <option value="SEMESTER IV">SEMESTER IV</option> 
                        <option value="SEMESTER V">SEMESTER V</option> 
                        <option value="SEMESTER VI">SEMESTER VI</option> 
                        <option value="SEMESTER VII">SEMESTER VII</option> 
                        <option value="SEMESTER VIII">SEMESTER VIII</option> 
                        <option value="SEMESTER PENDEK">SEMESTER PENDEK</option>                        
                    </select>
                     <p class="help-block">Kosongkan bila tidak ingin merubah data semester</p>
                </div>                               
                <div class="form-group">
                    <label for="id_prodi">Prodi</label>
                    <select class="form-control" tabindex="1"  name="nama_prodi[]" class="span8" multiple="multiple" id="nama_prodi" >
                        @foreach($prodi as $prd)
                        <option value="{{$prd->nama_prodi}} - {{$prd->program}}">{{$prd->nama_prodi}} - {{$prd->program}}</option>                                       
                        @endforeach
                    </select>
                    <p class="help-block">Kosongkan bila tidak ingin merubah data prodi</p>
                </div>
                <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    Update
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
