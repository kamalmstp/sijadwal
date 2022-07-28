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
          <h6 class="m-0 font-weight-bold text-primary">Ubah Data Organisasi Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Organisasi Mahasiswa</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updatemahasiswa', $editmahasiswa->id)}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="organisasi" class="control-label mb-1">Organisasi</label>
                    <input id="cc-pament" name="organisasi" type="text" class="form-control" value="{{$editmahasiswa->organisasi}}" required>
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
