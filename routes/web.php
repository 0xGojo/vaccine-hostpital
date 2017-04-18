<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['web']],function(){
 Route::get('/',function(){
   return view('fontend.mainpage.index');
 })->name('index');
 Route::get('/post/{id}',function(){
   return view('fontend.mainpage.single_post');
 })->name('single_post');
 Route::get('/register',function(){
   return view('fontend.register');
 })->name('register');
 Route::get('/login',function(){
   return view('fontend.login');
 })->name('login');
 Route::get('/vaccine',function(){
   return view('fontend.vaccinepage.vaccinepage');
 })->name('vaccinepage');

Route::group(['prefix'=>'/admin'],function(){
  Route::get('/',[
    'uses'=>'admincontroller@getindex',
    'as'=>'getAdminIndex'
  ]);
  Route::get('/vaccines',[
    'uses'=>'listController@getAdminVaccinePage',
    'as'=>'getAdminVaccinePage'
  ]);
  Route::get('/vaccine/add',[
    'uses'=>'adminedit@adminAddVaccine',
    'as'=>'getAdminAddVaccine'
  ]);
  Route::post('/vaccine/addin',[
    'uses'=>'adminedit@AddVaccine',
    'as'=>'AddVaccine'
  ]);
  Route::get('/khachtiem',[
    'uses'=>'listController@getAdminKhachTiemPage',
    'as'=>'getAdminKhachTiemPage'
  ]);
  Route::get('/khachtiem/add',[
    'uses'=>'adminedit@adminAddKhachTiem',
    'as'=>'getAdminAddKhachTiem'
  ]);
  Route::post('/khachtiem/addin',[
    'uses'=>'adminedit@AddKhachTiem',
    'as'=>'AddKhachTiem'
  ]);
  Route::get('/lichtiemphong',[
    'uses'=>'listController@getAdminLichTiemPhongPage',
    'as'=>'getAdminLichTiemPhongPage'
  ]);
  Route::get('/lichtiemphong/add',[
    'uses'=>'adminedit@adminAddLichTiemPhong',
    'as'=>'getAdminAddLichTiemPhong'
  ]);
  Route::get('/doituong',[
    'uses'=>'listController@getAdminDoiTuongPage',
    'as'=>'getAdminDoiTuongPage'
  ]);
  Route::get('/doituong/add',[
    'uses'=>'adminedit@adminAddDoiTuong',
    'as'=>'getAdminAddDoiTuong'
  ]);
  Route::get('/canbo',[
    'uses'=>'listController@getAdminCanBoPage',
    'as'=>'getAdminCanBoPage'
  ]);
  Route::get('/canbo/add',[
    'uses'=>'adminedit@adminAddCanBo',
    'as'=>'getAdminAddCanBo'
  ]);
  Route::get('/tintuc',[
    'uses'=>'listController@getAdminTinTucPage',
    'as'=>'getAdminTinTucPage'
  ]);
  Route::get('/tintuc/add',[
    'uses'=>'adminedit@adminAddTinTuc',
    'as'=>'getAdminAddTinTuc'
  ]);
  Route::get('/loaitin',[
    'uses'=>'listController@getAdminLoaiTinPage',
    'as'=>'getAdminLoaiTinPage'
  ]);
  Route::get('/loaitin/add',[
    'uses'=>'adminedit@adminAddLoaiTin',
    'as'=>'getAdminAddLoaiTin'
  ]);
});


 });
