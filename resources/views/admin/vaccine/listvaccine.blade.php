@extends('layouts.admin')
@section('title')
    admin page
@endsection
@section('links')
<ul>
  <li><a href="{{route('getAdminVaccinePage')}}">Danh sach vaccine</a></li>
  <li><a href="{{route('getAdminAddVaccine')}}">Them vaccine</a></li>
</ul>
@endsection
@section('content')
        <!-- neead a loop to show all vaccines-->
    <div class="container">
      <section class="find">
         <input type="text" name="findvaccine" placeholder="Nhap ten vaccine">
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
    </div>

@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
