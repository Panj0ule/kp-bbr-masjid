<!DOCTYPE html>

  @extends('layouts.main')

  @section('main-container')
  <section>
    <div class="container">
      <h1 class="mb-5">Category: {{ $category }}</h2>

      @if ($posts->count())
      <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400/?islam?mosque?muslim" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/informasi-kajian/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h3>
          <p>
            <small class="text-muted">
              <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $posts[0]->user->name }}</a>, in <a href="/categories/{{ $posts[0]->category->slug }}" style="text-decoration: underline; color: var(--color-links-hover)">{{ $posts[0]->category->name }}</a> - {{ $posts[0]->created_at->diffForHumans() }} </h5>
            </small>
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/informasi-kajian/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya...</a>
        </div>
      </div>
      @else
        <p class="text-center fs-4">Post not Found!</p>
      @endif

      <div class="container">
        <div class="row">
          @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.5)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
              <img src="https://source.unsplash.com/450x500/?islam?mosque?muslim" class="card-img-top" alt="{{ $post->category->name }}">
              <div class="card-body">
                <h5 class="card-title"><a href="/informasi-kajian/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                <p>
                  <small class="text-muted">
                    <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $posts[0]->user->name }}</a> - {{ $post->created_at->diffForHumans() }} </h5>
                  </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/informasi-kajian/post/{{ $posts[0]->slug }}" class="btn btn-primary">Selengkapnya..</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endsection

</html>



