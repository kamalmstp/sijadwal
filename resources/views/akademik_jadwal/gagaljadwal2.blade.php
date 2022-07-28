@extends('_layouts.admin')

@section('content')
<?php
function serialize_ke_string($serial)
{
    $request = unserialize($serial);
    return implode(', <br/>', $request);
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-12">
      <!-- Approach -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Perubahan Jadwal Gagal</h6>
        </div>
        <div class="card-body">                    
        @if(Session::has('flash_message'))
            <div class="row">   
            <div class="col-lg-12">     
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
            </div>
        @endif 

        <div class="row">
            <div class="col-lg-12">              
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>  
                    <div class="row">
                        <div class="col-lg-12">
                        <h1 style=" text-align:center;">GAGAL !</h1>
                        <hr/>
                        <h2 style="text-align:center;">" Sudah Ada Jadwal Mata Kuliah Diwaktu Yang Bersamaan "</h2>
                        <hr>   
                        <form role="form" method="POST" action="{{ route('kelolajadwal')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}    
                            <input type="hidden" name="id_tahunajaran" value="{{$th}}">                                             
                            <button type="submit" class="btn btn-info">Kembali </button>
                        </form>                         
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection
