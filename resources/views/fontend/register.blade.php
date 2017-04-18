@extends('layouts.main')

@section('title')
  Trang Chu
@endsection
@section('style')
      <link rel="stylesheet" href="{{URL::to('css/posts.css')}}">
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection
@section('content')
    <div class="container">
      <form class="register" action="" method="post">
        <div class="input-group">
          <label for="name">Ten</label>
          <input type="text" name="name" placeholder="Nhap ten day du">
        </div>
        <div class="input-group">
          <label for="birthday">Ngay sinh</label>
          <input type="date" name="birthday" >
        </div>
        <div class="input-group">
          <label for="gender">Gioi tinh</label>
          <select class="" name="gender">
            <option value="female" selected>Nu</option>
            <option value="male">Nam</option>
          </select>
        </div>
        <div class="input-group">
          <label for="phonenumber">So dien thoai</label>
          <input type="text" name="phonenumber">
        </div>
        <div class="input-group">
          <label for="address">Dia chi</label>
          <textarea name="address" rows="3"></textarea>
        </div>
        <div class="input-group">
          <label for="username">Ten dang nhap</label>
          <input type="text" name="username" >
        </div>
        <div class="input-group">
          <label for="password">Mat khau</label>
          <input type="password" name="password">
        </div>
        <div class="input-group">
          <label for="password_confirm">Xac nhan mat khau</label>
          <input type="password" name="password_confirm" >
        </div>
        <div class="input-group">
          <label for="picture">Anh cua ban</label>
          <input type="file" name="picture" class="file-input" value="">
        </div>
        <input type="hidden" name="_token" value="{{Session::token()}}">
        <button type="submit" class="btn">Dang ki</button>
      </form>
    </div>



@endsection
