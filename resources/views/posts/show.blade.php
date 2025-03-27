@extends('layouts.app')
@section('title') Show @endsection
@section('container')
<div class="card">
  <div class="card-header">
    Post info
  </div>
  <div class="card-body">
    <h5 class="card-title">Title: {{$post['title']}}</h5>
    <p class="card-text">Description: {{$post['description']}}</p>
  </div>
</div>
<div class="card mt-4">
  <div class="card-header">
    Post Creator info
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: Alaa</h5>
    <p class="card-text">Email: alaa34@gmail.com</p>
    <p class="card-text">Created at: Thursday 25th of December 2024</p>
  </div>
</div>
@endsection