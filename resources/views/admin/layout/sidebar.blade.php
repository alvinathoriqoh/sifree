<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">SIFREE</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Lelang Proyek</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Lelang</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ url('/lelang') }}">Semua Lelang</a></li>
            <li><a class="nav-link" href="#">Lelang Aktif</a></li>
          </ul>
        </li>
        <li class="menu-header">Dashboard</li>
        <li class=""><a class="nav-link" href="{{ url('admin/proyek') }}"><i class="far fa-star"></i> <span>Proyek</span></a></li>
        <li class=""><a class="nav-link" href="{{ url('admin/freelancer') }}"><i class="far fa-user"></i> <span>Freelancer</span></a></li>
        <li class=""><a class="nav-link" href="{{ url('admin/perusahaan') }}"><i class="far fa-cillinder"></i> <span>Perusahaan</span></a></li>
        <li class=""><a class="nav-link" href="{{ url('admin/users') }}"><i class="far fa-square"></i> <span>Aktivasi Users</span></a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i> <span>Pesan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Pesan Masuk</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Pesan Keluar</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Semua Pesan</a></li>
          </ul>
        </li>
        <li class=""><a class="nav-link" href="blank.html"><i class="fas fa-th-large"></i> <span>Komplain</span></a></li>
         </li>
          </ul>

      {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div> --}}
  </aside>
</div>
