@extends('layouts.main')

@section('title')
  Trang Chu
@endsection
@section('style')
      <link rel="stylesheet" href="{{URL::to('css/posts.css')}}">
      <link rel="stylesheet" href="{{URL::to('form/posts.css')}}">
@endsection
@section('content')
<div class="container">
  <div class="top">
    <h3>Vac xin</h3>
    <ul>
      <li><input type="text" name="vaccine_name" placeholder="nhap ten vac xin" id="vaccine_name" data-id="vaccine_name"></li>
      <li><button type="button" name="button" class="btn">Tim kiem</button></li>
    </ul>
  </div>
  <div class="posts">
  <li>
  <div class="post">
    <section>
      <!--put the loop here to show the content of each post-->
      <img src="" alt="">
      <ul>
        <li>title</li>
        <li>Content</li>
        <li><a href="#">Readmore</a></li>
      </ul>
    </section>
  </div>
  </li>
</div>
  <section class="pagination">
    pagination
  </section>
</div>

@endsection
