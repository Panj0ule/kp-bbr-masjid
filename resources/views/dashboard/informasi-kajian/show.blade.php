@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3" >{{ $post->title }}</h2>
        <a href="/dashboard/informasi-kajian" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Post Informasi Kajian</a>
        <a href="/dashboard/informasi-kajian/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/informasi-kajian/{{ $post->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> <i data-feather="x-circle"></i> Delete</button>
        </form>

        @if ($post->image)
          <div style="overflow: hidden">
            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-responsive center-block mt-3">
          </div>
        @else
          <img src="https://source.unsplash.com/450x500/?islam?mosque?muslim" alt="{{ $post->category->name }}" class="img-responsive center-block mt-3">
        @endif

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

      <a href="/informasi-kajian/" style="color: var(--color-links-hover)" class="d-block mt-3">Go to posts</a>
    </div>
  </div>
</div>


@endsection
