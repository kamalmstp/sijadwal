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
          <h6 class="m-0 font-weight-bold text-primary">Ubah Data Dosen</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">DOSEN</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updatedosen', $editdosen->id_dosen)  }}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="kode_matkul">Nip Dosen</label>
                    <input class="form-control" type="text" value="{{ $editdosen->nip_dosen }}" name="nip_dosen">
                </div>
                <div class="form-group">
                    <label for="nama_matkul">Nama Dosen</label>
                    <input class="form-control" type="text" value="{{ $editdosen->nama_dosen }}" name="nama_dosen">
                </div>   
                <div class="form-group">
                    <label for="email">Email Dosen</label>
                    <input class="form-control" type="email" value="{{ $editdosen->email }}" name="email" required>
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
