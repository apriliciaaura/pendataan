<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">PENDATAAN PENDAKIAN</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">PP</a>
          </div>
          <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
                <li><a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
          &nbsp
          <li class="menu-header">Data Master</li>
                <li><a href="{{ route('pendaki.index') }}" class="nav-link"><i class="fas fa-hiking"></i><span>Data Pendaki</span></a></li>
                <li><a href="{{ route('gunung.index') }}" class="nav-link"><i class="fas fa-mountain"></i><span>Data Gunung</span></a></li>
                <li><a href="{{ route('peraturan.index') }}" class="nav-link"><i class="fas fa-scroll"></i><span>Peraturan</span></a></li>
                <li><a href="{{ route('galeri.index') }}" class="nav-link"><i class="fas fa-images"></i><span>Galeri</span></a></li>
                <li><a href="{{ route('pengumuman.index') }}" class="nav-link"><i class="fas fa-bullhorn"></i><span>Pengumuman</span></a></li>
                <li><a href="{{ route('berita.index') }}" class="nav-link"><i class="fas fa-newspaper"></i><span>Berita</span></a></li>
                <li><a href="{{ route('export.index') }}" class="nav-link"><i class="fas fa-file-download"></i><span>Export Data</span></a></li>
          &nbsp
          <li class="menu-header">Konfigurasi</li>     
                <li><a href="{{ route('konfigurasi_user.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Konfigurasi User</span></a></li>
                <li><a href="{{ route('konfigurasi_web.index') }}" class="nav-link"><i class="fas fa-cog"></i><span>Konfigurasi Website</span></a></li>
          </ul>
        </aside>
      </div>