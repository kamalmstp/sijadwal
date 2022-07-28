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
          <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
        </div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">PROFILE</h3>
            </div>
        <hr>
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
                        <form role="form" method="POST" action="{{ URL::route('updateprofil') }}" enctype="multipart/form-data">
                        {!! csrf_field() !!}   
                        <input type="hidden" name="_method" value="patch">                                   
              
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" value="{{ $edituser->name }}" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" value="{{ $edituser->email }}" name="email" required>
                            </div>              
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" placeholder="Masukkan Password" name="password">
                                <p class="help-block">Kosongkan kolom password jika tidak ingin mengubah password</p>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input class="form-control" type="password" placeholder="Masukkan Password" name="password_confirmation">
                                <p class="help-block">Kosongkan kolom password jika tidak ingin mengubah password</p>
                            </div>                            
                            <br/>                                               
                            <button type="submit" class="btn btn-info">Ubah </button>
                        </form>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
