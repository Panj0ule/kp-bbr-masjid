<!DOCTYPE html>

  @extends('layouts.main')

  @section('main-container')
  <section>
    <div class="container">
      <h1 class="mb-5">Categories</h2>
      @foreach ($categories as $category)
        <article class="mb-3">
          <ul>
            <li>
              <h2 style="color:burlywood; text-decoration:underline"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
          </ul>
        </article>
      @endforeach
    </div>
  </section>
  @endsection

</html>



