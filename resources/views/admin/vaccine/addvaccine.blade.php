@extends('layouts.admin')
@section('title')
    add vaccine
@endsection


@section('styles')
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
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
          <form class="add" action="" method="post">
            <div class="input-group">
              <label for="serivaccine">Ma loai</label>
              <input type="text" name="serivaccine" value="">
            </div>
            <div class="input-group">
              <label for="vaccine_name">Ten vaccine</label>
              <input type="vaccine_name" name="password">
            </div>
            <div class="input-group">
              <label for="describe">Mo ta</label>
              <textarea name="describe" rows="8"></textarea>
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
