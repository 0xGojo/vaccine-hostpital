<?php
namespace App\Http\Controllers;
//use App\Post;
class listController extends  Controller
{
  public function getAdminVaccinePage()
  {
    //$posts= Post::all();
    return view('admin.vaccine.listvaccine');
  }
  public function getAdminKhachTiemPage()
  {
    //$posts= Post::all();
    return view('admin.khachtiem.listkhachtiem');
  }
  public function getAdminLichTiemPhongPage()
  {
    //$posts= Post::all();
    return view('admin.lichtiemphong.listlichtiemphong');
  }
  public function getAdminDoiTuongPage()
  {
    //$posts= Post::all();
    return view('admin.lichtiemphong.listdoituong');
  }
  public function getAdminCanBoPage()
  {
    //$posts= Post::all();
    return view('admin.canbo.listcanbo');
  }
  public function getAdminTinTucPage()
  {
    //$posts= Post::all();
    return view('admin.tintuc.listtintuc');
  }
  public function getAdminLoaiTinPage()
  {
    //$posts= Post::all();
    return view('admin.tintuc.listloaitin');
  }
}
