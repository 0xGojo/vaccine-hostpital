@extends('layouts.admin')
@section('title')
    admin page
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
      <section class="find">
         <input type="text" name="findvaccine" placeholder="Nhap ten dang nhap tiem">
         <button type="button" name="button" class="btn">Tim kiem</button>
      </section>
      <section class="list">
                <ul>
          @if(empty($khachtiems))   <!-- if no posts ..-->
          <li>No posts</li>
          @else                <!--else-->
          <table>
          <tr>
                <th>id</th>
                <th>ten</th>
                <th>gioi tinh</th>
                <th>Dia chi</th>
                <th>Ngay sinh</th>
                <th>Edit</th>
          </tr>

          @foreach($khachtiems as $khachtiem)
          <tr>
            <td>{{$khachtiem->id}}</td>
            <td>{{$khachtiem->name}}</td>
            <td>@if($khachtiem->gioitinh==1) Nam @else Nu @endif</td>
            <td>{{$khachtiem->diachi}}</td>
            <td>{{$khachtiem->ngaysinh}}</td>
            <td>
              <div class="edit">
                <button type="button" class="btn" name="button">Edit</button>
                <button type="button" name="button" class="btn danger">Delete</button>
              </div>
            </td>
          </tr>
          @endforeach
          </table>
          @endif
        </ul>
      </section>
      <section class="pagination">
          pagination
      </section>
    </div>

@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
