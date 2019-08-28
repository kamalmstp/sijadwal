    <!-- Sidebar -->
    <ul class="sidebar-menu" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon">
          <img src="{{asset('img/core-img/logounlam.png')}}" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">FH - ULM</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('tahunajaran')}}">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span>Tahun Ajaran</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Jadwal</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Jadwal:</h6>
            <a class="collapse-item" href="{{route('kelolajadwal_tahunajaran')}}">Kelola Jadwal</a>
            <a class="collapse-item" href="{{route('hasiljadwal_tahunajaran')}}">Hasil Jadwal</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('list_history')}}">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span>List History</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('jadwalguest')}}">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span>Jadwal Guest</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('berita')}}">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span>Pengumuman</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('mahasiswa')}}">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span>Organisasi</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('pemesanan_ruangan_kosong')}}">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span>Pemesanan Ruangan Kosong</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->