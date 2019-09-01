@extends('_layouts.base')
@section('judulawal') 
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/FH.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>LOGIN</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="col-12 col-lg-6" style="margin-bottom: 50px; margin-top: 50px;">
    <div class="login-content bg-white p-30 box-shadow">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Halaman Login</h5>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required autofocus >

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif                
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif                
            </div>
            <button type="submit" class="btn mag-btn mt-30">Login</button>
        </form>
    </div>
</div>
@endsection
