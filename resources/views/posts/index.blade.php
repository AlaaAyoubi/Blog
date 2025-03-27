@extends('layouts.app')
@section('title', 'Index')
@section('container')
    <div class="text-center">
    <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
    </div>
</div>

<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted</th>
      <th scope="col">Created</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($posts as $post)
    <tr>
        
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>
      <a href="{{route('posts.show', $post['id'])}}" class="btn btn-info">View</a>
      <a href="{{route('posts.edit', $post['id'])}}" class="btn btn-primary">Edit</a>
      
        <form style="display: inline;" method="post" action="{{route('posts.destroy', $post['id'])}}">
          @csrf
          @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      
      </td>
    </tr>
    @endforeach
  

  </tbody>
</table>
@endsection