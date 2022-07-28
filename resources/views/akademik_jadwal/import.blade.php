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
          <h6 class="m-0 font-weight-bold text-primary">Import Jadwal</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Import Excel</h3>
            </div>
            <hr>
            <form action="{{route('storeDatajadwal')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-success">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="">File (.xls, .xlsx)</label>
                    <input type="file" class="form-control" name="file" style="padding-bottom: 35px;">
                    <p class="text-danger">{{ $errors->first('file') }}</p>
                </div>
                <div class="form-group">
                    <button  type="submit" class="btn btn-success">Upload</button>
                </div>
            </form> 
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
