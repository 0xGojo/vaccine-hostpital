@extends('layouts.admin')
@section('title')
    add tin tuc
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

        <div class="container">
          <form class="add" action="" method="post">
            <div class="input-group">
              <label for="composer_id">Ma nguoi viet</label>
              <select class="" name="composer_id">
                <option value=""></option> <!-- need a loop here to show composer_id-->
              </select>
            </div>
            <div class="input-group">
              <label for="loaitin">loai tin</label>
              <select class="" name="loaitin">
                <option value=""></option> <!-- need a loop here to show composer_id-->
              </select>
            </div>
            <div class="input-group">
              <label for="title">Tiêu đề</label>
              <input type="text" name="title" >
            </div>
            <div class="input-group">
                <label for="content">Nội dung</label>
                <textarea name="content" rows="3"></textarea>
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
