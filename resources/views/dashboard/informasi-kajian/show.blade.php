@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3" >{{ $post->title }}</h2>
        <a href="/dashboard/informasi-kajian" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Menu Post Informasi Kajian</a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

        <img src="https://source.unsplash.com/450x500/?islam?mosque?muslim" alt="{{ $post->category->name }}" class="img-responsive center-block mt-3">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

      <a href="/informasi-kajian/" style="color: var(--color-links-hover)" class="d-block mt-3">Back to posts</a>
    </div>
  </div>
</div>


@endsection
