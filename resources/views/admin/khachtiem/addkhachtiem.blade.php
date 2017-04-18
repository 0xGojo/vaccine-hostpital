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
          <form class="add" action="" method="post">
            <div class="input-group">
              <label for="makhach">Ten</label>
              <input type="text" name="makhach" >
            </div>
            <div class="input-group">
              <label for="gender">Gioi tinh</label>
              <select class="" name="gender">
                <option value="male">Nam</option>
                <option value="female">Nu</option>
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
            <button type="submit" class="btn">Them</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
        </div>
@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
