@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Informasi Kajian</h1>
</div>

<a href="/dashboard/informasi-kajian/create" class="btn btn-primary mb-3">Create New Post</a>
{{-- Post by Admin --}}
<div>
  <h5>Post by {{ auth()->user()->name }}</h5>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($postsByAdmin as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/informasi-kajian/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
            <a href="#" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

    {{-- All Post --}}
  <div>
  <h5>All Post</h5>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($allPosts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/informasi-kajian/{{ $post->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
            <a href="#" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
