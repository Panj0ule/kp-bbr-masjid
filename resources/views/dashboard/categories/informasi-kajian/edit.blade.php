@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Category</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/categories-informasi-kajian/{{ $category->slug }}" class="mb-5">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" required autofocus value="{{ old('category', $category->name) }}">
      @error('category')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>


    <button type="submit" class="btn btn-primary">Update Category</button>
  </form>
</div>

<script>
  const title = document.querySelector('#category');
  const slug = document.querySelector('#slug');

  category.addEventListener('change', function(){
    fetch('/dashboard/categories-informasi-kajian/checkSlug?category=' + category.value)
      .then(response=>response.json())
      .then(data=>slug.value=data.slug)
  });
</script>
@endsection
