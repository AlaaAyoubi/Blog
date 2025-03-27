@extends('layouts.app')
@section('title') Edit @endsection
@section('container')
<div>
  <form method="POST" action="{{route('posts.store')}}"> 
    @csrf
    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input name="title" type="text" class="form-control" placeholder="Text">
    </div>
    <div class="mb-3">
      <label  class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Post Creator</label>
        <select name="creator" class="form-control">
          <option value="1">Alaa</option>
          <option value="2">Alia</option>
        </select>
    </div>
      <input class="btn btn-primary" type="submit" value="Update">
  </form>
</div>
@endsection