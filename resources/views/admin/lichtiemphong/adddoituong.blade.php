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
              <label for="object_name">Tên đối tượng</label>
                <input type="text" name="object_name">
            </div>
            <div class="input-group">
              <label for="note">Ghi chú</label>
              <textarea name="note" rows="5"></textarea>
            </div>
            <div class="input-group">
              <label for="batdau">So thang nho nhat</label>
                <input type="text" name="batdau">
            </div>
            <div class="input-group">
              <label for="ketthuc">So thang lon nhat</label>
                <input type="text" name="ketthuc">
            </div>
            <button type="submit" class="btn">Thêm</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
        </div>
@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
