<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>FEB - SIJADWAL</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/logounlam.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('styleee.css')}}">

    <!-- DataTables CSS -->
    <link href="{{asset('dt.css')}}" rel="stylesheet">

</head>

<body >
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel" >
        <!-- Single Blog Post -->
        @if($jmlberita > 0) 
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    @if($jmlberita < 3)
                    <div class="col-12 col-xl-12" style="margin-top: 56px; margin-bottom: 100px;">
                    @else
                    <div class="col-12 col-xl-12" style="margin-top: 40px;">
                    @endif
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">PENGUMUMAN</a>
                            @foreach($berita as $datas) 
                            <hr style="border-top: 3px solid #8c8b8b;">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:20px;">{!! $datas->isi !!}  </a>
                            <hr style="border-top: 3px solid #8c8b8b;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif 
        @if($jmlberita2 > 0)    
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    @if($jmlberita2 < 3)
                    <div class="col-12 col-xl-12" style="margin-top: 56px; margin-bottom: 100px;">
                    @else
                    <div class="col-12 col-xl-12" style="margin-top: 40px;">
                    @endif
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">PENGUMUMAN</a>
                            @foreach($berita2 as $data2) 
                            <hr style="border-top: 3px solid #8c8b8b;">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:20px;">{!! $data2->isi !!}  </a>
                            <hr style="border-top: 3px solid #8c8b8b;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmlberita3 > 0)    
        <div class="hero-blog-post bg-img bg-overlay">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    @if($jmlberita3 < 3)
                    <div class="col-12 col-xl-12" style="margin-top: 56px; margin-bottom: 100px;">
                    @else
                    <div class="col-12 col-xl-12" style="margin-top: 40px;">
                    @endif
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">PENGUMUMAN</a>
                            @foreach($berita3 as $data3) 
                            <hr style="border-top: 3px solid #8c8b8b;">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:20px;">{!! $data3->isi !!}  </a>
                            <hr style="border-top: 3px solid #8c8b8b;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmlberita4 > 0)    
        <div class="hero-blog-post bg-img bg-overlay">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    @if($jmlberita4 < 3)
                    <div class="col-12 col-xl-12" style="margin-top: 56px; margin-bottom: 100px;">
                    @else
                    <div class="col-12 col-xl-12" style="margin-top: 40px;">
                    @endif
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">PENGUMUMAN</a>
                            @foreach($berita4 as $data4) 
                            <hr style="border-top: 3px solid #8c8b8b;">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:20px;">{!! $data4->isi !!}  </a>
                            <hr style="border-top: 3px solid #8c8b8b;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmlberita5 > 0)    
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    @if($jmlberita5 < 3)
                    <div class="col-12 col-xl-12" style="margin-top: 56px; margin-bottom: 100px;">
                    @else
                    <div class="col-12 col-xl-12" style="margin-top: 40px;">
                    @endif
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">PENGUMUMAN</a>
                            @foreach($berita5 as $data5) 
                            <hr style="border-top: 3px solid #8c8b8b;">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:20px;">{!! $data5->isi !!}  </a>
                            <hr style="border-top: 3px solid #8c8b8b;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($jmlberita6 > 0)    
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    @if($jmlberita6 < 3)
                    <div class="col-12 col-xl-12" style="margin-top: 56px; margin-bottom: 100px;">
                    @else
                    <div class="col-12 col-xl-12" style="margin-top: 40px;">
                    @endif
                        <div class="archive-posts-area bg-white p-30 mb-30 box-shadow text-center">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:30px;">PENGUMUMAN</a>
                            @foreach($berita6 as $data6) 
                            <hr style="border-top: 3px solid #8c8b8b;">
                            <a href="#" class="post-title" data-animation="fadeInUp" data-delay="300ms" style="font-size:20px;">{!! $data6->isi !!}  </a>
                            <hr style="border-top: 3px solid #8c8b8b;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="hero-blog-post bg-img bg-overlay" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">        
                    <h1>TIDAK ADA PENGUMUMAN</h1>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-success" href="{{url('/')}}" style="color: #fff;">BACK</a>
                </div>
            </div>
        </div>        
        @endif        
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
</body>

</html>