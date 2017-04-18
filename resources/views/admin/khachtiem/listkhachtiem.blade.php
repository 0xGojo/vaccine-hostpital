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
          @if(empty($posts))   <!-- if no posts ..-->
          <li>No posts</li>
          @else                <!--else-->
          @foreach($posts as $post)
          <li>
            <article class="">
                <div class="edit">
                  <nav>
                    <ul>
                    </ul>
                  </nav>
                </div>
            </article>
          </li>
          @endforeach
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
