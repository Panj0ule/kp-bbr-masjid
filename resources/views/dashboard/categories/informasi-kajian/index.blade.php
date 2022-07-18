@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Informasi Kajian</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif
<a href="/dashboard/informasi-kajian/create" class="btn btn-primary mb-3">Create New Post</a>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="postByAdmin-tab" data-bs-toggle="tab" data-bs-target="#postByAdmin" type="button" role="tab" aria-controls="postByAdmin" aria-selected="true">Post By Admin</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="allPost-tab" data-bs-toggle="tab" data-bs-target="#allPost" type="button" role="tab" aria-controls="allPost" aria-selected="false">All Post</button>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  {{-- POST BY ADMIN --}}
  <div class="tab-pane fade show active" id="postByAdmin" role="tabpanel" aria-labelledby="postByAdmin-tab">
    <h5 class="mt-3">Post by {{ auth()->user()->name }}</h5>
    <div class="table-responsive col-lg-10">
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
              <a href="/dashboard/informasi-kajian/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/informasi-kajian/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="tab-pane fade" id="allPost" role="tabpanel" aria-labelledby="allPost-tab">
    {{-- ALL POST --}}
    <h5 class="mt-3">All Post</h5>
    <div class="table-responsive col-lg-10">
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
              <a href="/dashboard/informasi-kajian/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/informasi-kajian/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/informasi-kajian/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
