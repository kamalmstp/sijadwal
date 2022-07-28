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
          <h6 class="m-0 font-weight-bold text-primary">Ubah Data Jam</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Jam</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updatejam', $editjam->kode_jam)}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="nama_jam" class="control-label mb-1">Nama Jam</label>
                    <input id="cc-pament" name="nama_jam" value="{{$editjam->nama_jam}}" type="time" class="form-control" required>
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
