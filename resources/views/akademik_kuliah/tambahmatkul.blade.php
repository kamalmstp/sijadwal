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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Kuliah</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Mata Kuliah</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('simpanmatakuliah')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!} 
                <div class="form-group">
                    <label for="kode_matkul" class="control-label mb-1">Kode Mata Kuliah</label>
                    <input class="form-control" type="text" placeholder="Masukkan Kode Mata Kuliah" name="kode_matkul" required>
                </div>
                <div class="form-group">
                    <label for="nama_matkul" class="control-label mb-1">Nama Mata Kuliah</label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Mata Kuliah" name="nama_matkul" required>
                </div>
                <div class="form-group">
                    <label for="kelas" class="control-label mb-1">Kelas</label>
                    <input class="form-control" type="text" placeholder="Masukkan Kelas" name="kelas" >
                </div>                              
                <div class="form-group">
                    <label for="sks" class="control-label mb-1">SKS</label>
                    <input class="form-control" type="number" placeholder="Masukkan SKS" name="sks" required>
                </div>  

                <div class="form-group">
                    <label for="semester" class="control-label mb-1">Semester</label>
                    <select class="form-control" tabindex="1"  name="semester[]" class="span8" multiple="multiple" id="semester" required>
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
                </div>                               
                <div class="form-group">
                    <label for="id_prodi" class="control-label mb-1">Prodi</label>
                    <select class="form-control" tabindex="1"  name="nama_prodi[]" class="span8" multiple="multiple" id="nama_prodi" required>
                        @foreach($prodi as $prd)
                        <option value="{{$prd->nama_prodi}} - {{$prd->program}}">{{$prd->nama_prodi}} - {{$prd->program}}</option>                                       
                        @endforeach
                    </select>
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
