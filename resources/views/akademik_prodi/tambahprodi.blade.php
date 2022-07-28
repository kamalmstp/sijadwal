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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Prodi</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">PRODI</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('simpanprodi')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!} 
                <div class="form-group">
                    <label for="nama_prodi" class="control-label mb-1">Nama Prodi</label>
                    <input id="cc-pament" name="nama_prodi" type="text" class="form-control" required>
                    <p class="help-block">Mis: Akuntansi</p>
                </div>
                <div class="form-group">
                    <label for="program" class="control-label mb-1">Program</label>
                    <input id="cc-pament" name="program" type="text" class="form-control" required>
                    <p class="help-block">Mis: S1 Reg A</p>
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
