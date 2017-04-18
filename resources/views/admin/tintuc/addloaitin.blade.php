@extends('layouts.admin')
@section('title')
    add loai tin tuc
@endsection


@section('styles')
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection

@section('links')
<ul>
  <li><a href="{{route('getAdminTinTucPage')}}">Danh sách tin tức</a></li>
  <li><a href="{{route('getAdminAddTinTuc')}}">Thêm tin tức</a></li>
  <li><a href="{{route('getAdminLoaiTinPage')}}">Danh sách loại tin</a></li>
  <li><a href="{{route('getAdminAddLoaiTin')}}">Thêm loại tin</a></li>
</ul>
@endsection
@section('content')
        <!-- neead a loop to show all vaccines-->
        <div class="container">
          <form class="add" action="" method="post">
            <div class="input-group">
              <label for="name">Tên loại</label>
              <input type="name" name="tencanbo" >
            </div>
            <div class="input-group">
                <label for="describe">Mô tả</label>
                <textarea name="describe" rows="3"></textarea>
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
