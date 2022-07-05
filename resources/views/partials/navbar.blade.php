    <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center" style="text-decoration: none">
        <img src="{{ asset('LOGO masjidbabburahman.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Beranda</a></li>
          <li class="dropdown"><a href="category.html"><span>Agenda</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Kalender Kegiatan</a></li>
              <li><a href="#">Jadwal Shalat</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/informasi-kajian">Informasi Kajian</a></li>
              <li><a href="#">Informasi Umum</a></li>
              <li><a href="/categories/">Kategori</a></li>
              <li><a href="#">Pengumuman</a></li>
            </ul>
          </li>
          <li><a href="#">Profil Masjid</a></li>

          <li><a href="contact.html">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->
