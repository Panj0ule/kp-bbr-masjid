<!DOCTYPE html>
<!-- css login -->
<link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
  @extends('layouts.main')

  @section('main-container')
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">

          @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="Close"></button>
            </div>
          @endif

          <main class="form-signin">
            <form action='/login' method="POST">
              @csrf
              <img class="mb-4 logo d-flex" src="{{ asset('LOGO masjidbabburahman.png') }}" alt="" width="250" height="40">
              <h1 class="h3 mb-3 fw-normal">Please Login</h1>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
          </main>
        </div>
      </div>
    </div>

  </section>
  @endsection

</html>



