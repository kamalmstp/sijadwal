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
          <h6 class="m-0 font-weight-bold text-primary">Tambah Organisasi</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Organisasi</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('simpanmahasiswa')}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!} 
                <div class="form-group">
                    <label for="organisasi" class="control-label mb-1">Organisasi</label>
                    <input id="cc-pament" name="organisasi" type="text" class="form-control" required>
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
