@extends('layouts.admin')
@section('title')
    add vaccine
@endsection


@section('styles')
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection

@section('links')
    <ul>
      <li><a href="{{route('getAdminKhachTiemPage')}}">Danh sach khach tiem</a></li>
      <li><a href="{{route('getAdminAddKhachTiem')}}">Them khach tiem</a></li>
    </ul>
@endsection
@section('content')
        <!-- neead a loop to show all vaccines-->
        <div class="container">
          @include('includes.info-box')
          <form class="add" action="{{route('AddKhachTiem')}}" method="post" enctype="multipart/form-data">
            <div class="input-group">
              <label for="name">Ten</label>
              <input type="text" name="name" >
            </div>
            <div class="input-group">
              <label for="gender">Gioi tinh</label>
              <select class="" name="gender">
                <option value="1">Nam</option>
                <option value="0">Nu</option>
              </select>
            </div>
            <div class="input-group">
              <label for="birthday">Ngay sinh</label>
              <input type="date" name="birthday" >
            </div>
            <div class="input-group">
              <label for="address">Dia chi</label>
              <textarea name="address" rows="8"></textarea>
            </div>
            <div class="input-group">
              <label for="username">Ten dang nhap</label>
              <input type="text" name="username" >
            </div>
            <div class="input-group">
              <label for="password">Mat khau</label>
              <input type="password" name="password" >
            </div>
            <div class="input-group">
              <label for="img">Anh dai dien</label>
              <input type="file" name="img" >
            </div>
            <button type="submit" class="btn">Them</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
        </div>
@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
