@extends('layouts.main')

@section('title')
  Name of singlepost
@endsection
@section('style')
      <link rel="stylesheet" href="{{URL::to('css/posts.css')}}">
@endsection
@section('content')
  <div class="single_post">
    <h1>Title here</h1>
    <h3>created_at</h3>
    <p>Content</p>
  </div>

@endsection
