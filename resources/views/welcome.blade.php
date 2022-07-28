@extends('_layouts.base')

@section('judulawal')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/FH.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>SIJADWAL</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('menupengumuman')
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pengumuman</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-12 col-xl-8">
    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">
        @foreach($berita as $brt)
        <?php
          $split1    = explode('-',  $brt->dari);
          $tgl_indo1 = $split1[2] . ' ' . $bulan[ (int)$split1[1] ] . ' ' . $split1[0];
        ?>
        <!-- Single Catagory Post -->

            <!-- Thumbnail -->
            <!-- Post Contetnt -->
            <div class="post-content">
                <div class="post-meta">
                    <a style="font-weight: bold;">{{$tgl_indo1}}</a>
                    <a style="font-weight: bold;">By Akademik - FH</a>
                </div>
                <a href="{{route('pengumuman', $brt->id_berita)}}" class="post-title" style="font-weight: bold;">Pengumuman</a>

                <!-- Post Meta -->
                <p style="text-align: justify; margin-top: 15px; color: #000;">{!! str_limit($brt->isi, 210) !!} <a class="btn btn-link" href="{{route('pengumuman', $brt->id_berita)}}">Read More <i class="icon-angle-right"></i></a></p><hr/>

            </div>

        @endforeach

        @if (isset($berita) && $berita != NULL)
        <nav aria-label="navigation" style="margin-bottom: 30px;">
            {{ $berita->appends(request()->input())->links() }}
        </nav>
        @else
            // Do something which tells the user that there are no books
        @endif
    </div>
</div>
@endsection

{{--@section('content2')
<div class="col-12 col-md-6 col-lg-5 col-xl-4">
    <div class="sidebar-area bg-white mb-30 box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30" style="padding: 30px 30px 0px 30px !important;">
            <!-- Social Followers Info -->
            <div class="social-followers-info">
                <!-- Facebook -->
                <a href="https://www.facebook.com/fakultashukum.ulm" class="facebook-fans"><i class="fa fa-facebook"></i> FH - UNLAM </a>
                <!-- Twitter -->
                <a href="https://twitter.com/bemfhulm?lang=en" class="twitter-followers"><i class="fa fa-twitter"></i> FH - UNLAM</a>
                <a href="https://www.instagram.com/bemfh_ulm/" class="instagram-followers"><i class="fa fa-instagram"></i> FH - UNLAM</a>
            </div>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <center><a href="#" class="add-img"><img src="img/core-img/logoulm.png" alt="" style="width: 260px; margin-top: 20px;margin-bottom: 20px;"></a></center>
        </div>

    </div>
</div>
@endsection--}}
