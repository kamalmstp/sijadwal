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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Tahun Ajaran</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">TAHUN AJARAN</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('simpantahun_ajaran')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!} 
                <div class="form-group">
                    <label for="nama_prodi" class="control-label mb-1">Tahun Ajaran</label>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Tahun Ajaran..." name="tahun_ajaran1" required />
                      <input type="number" class="form-control" placeholder="Tahun Ajaran..." name="tahun_ajaran2" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select class="form-control" tabindex="1" data-placeholder="Pilih Mata Kuliah.." name="semester" class="span8">
                        <option value="GANJIL">GANJIL</option>
                        <option value="GENAP">GENAP</option>
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
