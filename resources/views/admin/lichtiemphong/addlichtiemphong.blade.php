@extends('layouts.admin')
@section('title')
    add vaccine
@endsection


@section('styles')
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection

@section('links')
    <ul>
      <li><a href="{{route('getAdminLichTiemPhongPage')}}">Danh sách lịch tiêm phòng</a></li>
      <li><a href="{{route('getAdminAddLichTiemPhong')}}">Thêm lịch tiêm phòng</a></li>
      <li><a href="{{route('getAdminDoiTuongPage')}}">Danh sách đối tượng tiêm phòng</a></li>
      <li><a href="{{route('getAdminAddDoiTuong')}}">Thêm đối tượng tiêm phòng</a></li>
    </ul>
@endsection
@section('content')
        <!-- neead a loop to show all vaccines-->
        <div class="container">
          <form class="add" action="" method="post">
            <div class="input-group">
              <label for="gender">Ma Doi tuong</label>
              <select class="" name="doituong_id">
              <!--loop for id doi tuong -->
                <option value=""></option>
              </select>
            </div>
            <div class="input-group">
              <label for="vaccine_id">Ma vaccine</label>
              <select class="" name="vaccine_id">
                <!--loop for id Vaccine -->
                <option value=""></option>
              </select>
            </div>
            <div class="input-group">
              <label for="nth_of_injection">Mui tiem lan thu</label>
              <input type="nth_of_injection" name="" value="">
            </div>
            <div class="input-group">
              <label for="note">Ghi chu</label>
              <textarea name="note" rows="5"></textarea>
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
