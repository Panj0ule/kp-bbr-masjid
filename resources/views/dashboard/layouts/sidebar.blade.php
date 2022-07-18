<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/informasi-kajian*') ? 'active' : '' }}" href="/dashboard/informasi-kajian">
          <span data-feather="file-text"></span>
          Post Informasi Kajian
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories_informasi-kajian*') ? 'active' : '' }}" href="dashboard/categories_informasi-kajian">
          <span data-feather="grid"></span>
          Category Informasi Kajian
        </a>
      </li>
    </ul>


  </div>
</nav>
