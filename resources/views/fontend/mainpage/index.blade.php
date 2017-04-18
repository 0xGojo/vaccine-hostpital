@extends('layouts.main')

@section('title')
  Trang Chu
@endsection
@section('style')
      <link rel="stylesheet" href="{{URL::to('css/posts.css')}}">
@endsection
@section('content')
    <div class="container">
      <div class="top">
        <h3>Tin tuc</h3>
        <h4>thu 6, ngay 14/04/2017</h4>
      </div>
      <!--put the loop here to show the content of each post-->
      <li>
      <div class="posts">
        <section>
          <img src="" alt="">
          <ul>
            <li>title</li>
            <li>Content</li>
            <li><a href="#">Readmore</a></li>
          </ul>
        </section>
      </div>
      <li>
      <section class="pagination">
        pagination
      </section>
    </div>

@endsection
