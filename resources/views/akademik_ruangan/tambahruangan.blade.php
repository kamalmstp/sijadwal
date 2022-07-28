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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Ruangan</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Ruangan</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('simpanruangan')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!} 
                <div class="form-group">
                    <label for="koderuangan" class="control-label mb-1">Kode Ruangan</label>
                    <input id="cc-pament" name="koderuangan" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_ruangan" class="control-label mb-1">Nama Ruangan</label>
                    <input id="cc-pament" name="nama_ruangan" type="text" class="form-control" required>
                </div>                    
                <div class="form-group">
                    <label for="kapasitas_ruangan">Kapasitas Ruangan</label>
                    <input class="form-control" type="number"  name="kapasitas_ruangan" required="">
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
