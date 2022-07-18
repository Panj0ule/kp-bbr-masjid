      <!-- Footer section -->
      <footer>
        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
              </a>
              <span class="text-muted">© Masjid Babburahman</span>
            </div>

            @auth
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class=" px-3 border-0"><i class="bi bi-box-arrow-right"></i> Logout ({{ auth()->user()->name }}) </button>
            </form>
            @else
              <a href="/login"class="text-muted">Login Admin</a>
            @endauth
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
              <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
              <a href="#" class="mx-2"><span class="bi-instagram"></span></a>
            </ul>
          </div>
        </footer>
