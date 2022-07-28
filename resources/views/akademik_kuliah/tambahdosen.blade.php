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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Dosen</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Dosen</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('simpandosen')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!} 
                <div class="form-group">
                    <label for="nip_dosen">NIP Dosen</label>
                    <input class="form-control" type="text" placeholder="Masukkan NIP Dosen" name="nip_dosen" required>
                </div>              
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Dosen" name="nama_dosen" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Dosen</label>
                    <input class="form-control" type="email" placeholder="Masukkan Email Dosen" name="email" required>
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
