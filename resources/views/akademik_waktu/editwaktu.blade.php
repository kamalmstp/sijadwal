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
          <h6 class="m-0 font-weight-bold text-primary">Ubah Data Waktu</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Waktu</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updatewaktu', $editwaktu->kode_waktu)}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                  <label for="kode_hari">Hari</label>
                  <select class="form-control" tabindex="1"  name="kode_hari" class="span8">
                      <option value="{{$edithari->kode_hari}}">{{$edithari->nama_hari}}</option>
                      @foreach($hari as $hr)
                      <option value="{{$hr->kode_hari}}">{{$hr->nama_hari}}</option>
                      @endforeach 
                  </select>
                </div>                  
                <div class="form-group">
                  <label for="kode_jam">Jam</label>
                  <select class="form-control" tabindex="1"  name="kode_jam" class="span8">
                      <option value="{{$editjam->kode_jam}}">{{$editjam->nama_jam}}</option>
                      @foreach($jam as $jm)
                      <option value="{{$jm->kode_jam}}">{{$jm->nama_jam}}</option>
                      @endforeach 
                  </select>
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
