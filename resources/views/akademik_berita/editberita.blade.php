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
          <h6 class="m-0 font-weight-bold text-primary">Edit Berita Perubahan Jadwal</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Berita</h3>
            </div>
            <hr>
            <form method="POST" action="{{ route('updateberita', $editberita->id_berita)}}" enctype="multipart/form-data" novalidate="novalidate">
                {!! csrf_field() !!}  
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                  <label for="dari">Dari</label>
                  <input class="form-control" type="date" name="dari" value="{{$editberita->dari}}" >                                   
                </div> 
                <div class="form-group">
                  <label for="sampai">Sampai</label>
                  <input class="form-control" type="date" name="sampai" value="{{$editberita->sampai}}" >                                  
                </div>                                                               
                <div class="form-group">
                  <label for="isi">Berita</label>
                  <textarea class="form-control" rows="3"  name="isi">{{$editberita->isi}}</textarea>                                  
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
