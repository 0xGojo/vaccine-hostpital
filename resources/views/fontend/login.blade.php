@extends('layouts.main')

@section('title')
  Dang nhap
@endsection
@section('style')
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection
@section('content')
    <div class="container">
      <form class="login" action="" method="post">
        <div class="input-group">
          <label for="username">Ten dang nhap</label>
          <input type="text" name="username" value="">
        </div>
        <div class="input-group">
          <label for="password">Mat khau</label>
          <input type="password" name="password">
        </div>
        <button type="submit" class="btn">Dang nhap</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>


@endsection
