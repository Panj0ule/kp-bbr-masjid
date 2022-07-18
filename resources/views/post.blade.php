<!DOCTYPE html>

  @extends('layouts.main')

  @section('main-container')
    <section>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8">
            <h1 class="mb-3" >{{ $post->title }}</h2>
              <p>
                <h5>By: <a href="#" style="color: var(--color-links-hover)">{{ $post->user->name }}</a>, in <a href="/informasi-kajian?category={{ $post->category->slug }}" style="text-decoration: underline; color: var(--color-links-hover)">{{ $post->category->name }}</a></h5>
              </p>

              @if ($post->image)
                <div style="overflow: hidden">
                  <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-responsive center-block mt-3">
                </div>
              @else
                <img src="https://source.unsplash.com/450x500/?islam?mosque?muslim" alt="{{ $post->category->name }}" class="img-responsive center-block">
              @endif

              <article class="my-3 fs-5">
                {!! $post->body !!}
              </article>

            <a href="/informasi-kajian/" style="color: var(--color-links-hover)" class="d-block mt-3">Back to posts</a>
          </div>
        </div>
      </div>

    </section>
  @endsection

</html>



