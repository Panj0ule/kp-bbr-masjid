<!DOCTYPE html>
  @extends('layouts.main')

  @section('main-container')
  <section>
    <div class="container">
      @foreach ($posts as $post)
        <article class="mb-3 border-bottom pb-3">
          <h2>
            <a href="/informasi-warga/post/{{ $post->slug }}">{{ $post->title }}</a>
          </h2>
          <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $post->user->name }}</a>, in <a href="/informasi-warga/categories/{{ $post->category->slug }}" style="text-decoration: underline; color: var(--color-links-hover)">{{ $post->category->name }}</a></h5>
          <p>{{ $post->excerpt }}</p>
          <a href="/informasi-warga/post/{{ $post->slug }}" style="color: var(--color-links-hover)">Selengkapnya...</a>
        </article>
      @endforeach
    </div>
  </section>
  @endsection

</html>
