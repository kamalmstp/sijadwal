<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                <a href="{{url('/')}}" class="nav-brand"><img src="{{asset('img/core-img/logoulm.png')}}" alt="" style="width: 50px;"></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{route('jadwal_guest')}}">Jadwal</a></li>
                                <li><a href="{{route('layarfulljadwalguest')}}" target="_blank">Layar Full Jadwal</a></li>
                                <li><a href="{{route('layarfullpengumumanguest')}}" target="_blank">Layar Full Pengumuman</a></li>
                                <li><a href="{{route('pemesanan_jadwal_ruang_kosong')}}" >Pemesanan Jadwal Ruang Kosong</a></li>                                
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <!-- Login -->
                        <a href="{{route('login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->