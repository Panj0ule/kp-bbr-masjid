<!DOCTYPE html>

  @extends('layouts.main')

  @section('main-container')
    <section>
      <div class="container">
        <h1 class="mb-5">{{ $post->title }}</h2>
          <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $post->user->name }}</a>, in <a href="/informasi-warga/categories/{{ $post->category->slug }}" style="text-decoration: underline; color: var(--color-links-hover)">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}

        <a href="/informasi-warga/" style="color: var(--color-links-hover)" class="d-block mt-3">Back to posts</a>
      </div>

    </section>
  @endsection

</html>



