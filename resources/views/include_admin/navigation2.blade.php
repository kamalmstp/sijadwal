<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('tahunajaran')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Tahun Ajaran
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Jadwal
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('kelolajadwal_tahunajaran')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('hasiljadwal_tahunajaran')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Jadwal</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('list_history')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                List History
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('jadwalguest')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Jadwal Guest
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('berita')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('mahasiswa')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Organisasi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('pemesanan_ruangan_kosong')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pemesanan Ruang Kosong
              </p>
            </a>
          </li>
        </ul>