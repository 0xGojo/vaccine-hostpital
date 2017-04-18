@extends('layouts.admin')
@section('title')
    vaccine
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
                <ul> <!-- if no posts ..-->
          @if(count($vaccines)<1)
          <li>No vaccines</li>
          @else                <!--else-->
          <table>
          <tr>
                <th>id</th>
                <th>ten vaccine</th>
                <th>tac dung</th>
                <th>Chi dinh</th>
                <th>Chong chi dinh</th>
                <th>Tac dung phu</th>
                <th>Gia</th>
                <th>Ma loai vaccine</th>
                <th>Edit</th>
          </tr>

          @foreach($vaccines as $vaccine)
          <tr>
            <td>{{$vaccine->id}}</td>
            <td>{{$vaccine->name}}</td>
            <td>{{$vaccine->tacdung}}</td>
            <td>{{$vaccine->chidinh}}</td>
            <td>{{$vaccine->chongchidinh}}</td>
            <td>{{$vaccine->tacdungphu}}</td>
            <td>{{$vaccine->gia}}</td>
            <td>{{$vaccine->loaivacxin_id}}</td>
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
    </div>

@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
