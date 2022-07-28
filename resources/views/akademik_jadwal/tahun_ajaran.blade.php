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
          <h6 class="m-0 font-weight-bold text-primary">Kelola Jadwal</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Pilih Tahun Ajaran</h3>
            </div>
            <hr>
            <form role="form" method="POST" action="{{ route('kelolajadwal') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}                            
                <div class="form-group">
                    <select class="form-control" tabindex="1" data-placeholder="Pilih Tahun Ajaran.." name="id_tahunajaran" class="span8">
                        @foreach($tahun_ajaran as $mtl)
                        <option value="{{$mtl->id_tahunajaran}}">{{$mtl->tahun_ajaran  }} {{$mtl->semester  }}</option>
                        @endforeach 
                    </select>
                    <br/>

                <button type="submit" class="btn btn-primary">Pilih Tahun Ajaran / Kurikulum</button>                   
                </div>                                                                        
            </form>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
