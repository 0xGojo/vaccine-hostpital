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
            @include('includes.info-box')
          <form class="add" action="{{route('AddVaccine')}}" method="post">
            <div class="input-group">
              <label for="serivaccine">Ma loai</label>
              @if(!empty($loaivaccines))
              <select class="" name="serivaccine">
              @foreach($loaivaccines as $loaivaccine)
              <option value="{{$loaivaccine->id}}">{{$loaivaccine->id}}({{$loaivaccine->name}})</option>
              @endforeach
              @endif
              </select>
            </div>
            <div class="input-group">
              <label for="vaccine_name">Ten vaccine</label>
              <input type="vaccine_name" name="vaccine_name" value="{{Request::old('vaccine_name')?Request::old('vaccine_name'):''}}">
            </div>
            <div class="input-group">
              <label for="chidinh">Chi dinh</label>
              <textarea name="chidinh" rows="8"></textarea>
            </div>
            <div class="input-group">
              <label for="chongchidinh">Chong chi dinh</label>
              <textarea name="chongchidinh" rows="8"></textarea>
            </div>
            <div class="input-group">
              <label for="price">Gia</label>
              <input type="text" name="price" value="">
            </div>
            <div class="input-group">
              <label for="tacdung">Tac dung</label>
              <textarea name="tacdung" rows="8"></textarea>
            </div>
            <div class="input-group">
              <label for="tacdungphu">Tac dung phu</label>
              <textarea name="tacdungphu" rows="8"></textarea>
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
