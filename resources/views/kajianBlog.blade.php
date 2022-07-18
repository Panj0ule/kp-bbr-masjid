<!DOCTYPE html>
  @extends('layouts.main')

  @section('main-container')
  <section>
    <div class="container">
      <h1 class="mb-3 text-center" style="color: green;">{{ $title }}</h2>
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <form action="/informasi-kajian">
            @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
          </form>
        </div>
      </div>

      @if ($posts->count())
        <div class="card mb-3">
          @if ($posts[0]->image)
            <div style="max-height:350px;overflow:hidden">
              <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-responsive center-block">
            </div>
          @else
            <img src="https://source.unsplash.com/1200x400/?islam?mosque?muslim" class="card-img-top" alt="...">
          @endif

          <div class="card-body text-center">
            <h3 class="card-title"><a href="/informasi-kajian/post/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h3>
            <p>
              <small class="text-muted">
                <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $posts[0]->user->name }}</a>, in <a href="/informasi-kajian?category={{ $posts[0]->category->slug }}" style="text-decoration: underline; color: var(--color-links-hover)">{{ $posts[0]->category->name }}</a> - {{ $posts[0]->created_at->diffForHumans() }} </h5>
              </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/informasi-kajian/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya...</a>
          </div>
        </div>


        <div class="container">
          <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.5)"><a href="/informasi-kajian?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>

                @if ($post->image)
                  <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-responsive center-block">
                @else
                  <img src="https://source.unsplash.com/450x500/?islam?mosque?muslim" class="card-img-top" alt="{{ $post->category->name }}">
                @endif

                <div class="card-body">
                  <h5 class="card-title"><a href="/informasi-kajian/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                  <p>
                    <small class="text-muted">
                      <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $post->user->name }}</a> - {{ $post->created_at->diffForHumans() }} </h5>
                    </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/informasi-kajian/post/{{ $post->slug }}" class="btn btn-primary">Selengkapnya..</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @else
          <p class="text-center fs-4">Post not Found!</p>
      @endif

      <div class="d-flex justify-content-center">{{ $posts->links() }}</div>

  </section>
  @endsection

</html>
