<!DOCTYPE html>

  @extends('layouts.main')

  @section('main-container')
  <section>
    <div class="container">
      <h1 class="mb-5">Category: {{ $category }}</h2>
      @foreach ($posts as $post)
        <article class="mb-3 border-bottom pb-3">
          <h2>
            <a href="/informasi-warga/post/{{ $post->slug }}">{{ $post->title }}</a>
          </h2>
          <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $post->user->name }}</a></h5>
          <p>{{ $post->excerpt }}</p>
          <a href="/informasi-warga/post/{{ $post->slug }}" style="color: var(--color-links-hover)">Selengkapnya...</a>
        </article>
      @endforeach
    </div>
  </section>
  @endsection

</html>



