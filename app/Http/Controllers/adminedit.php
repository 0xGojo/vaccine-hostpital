<?php
namespace App\Http\Controllers;
//use App\Post;
class adminedit extends  Controller
{
  public function adminAddVaccine()
  {
    //$posts= Post::all();
    return view('admin.vaccine.addvaccine');
  }
  public function adminAddKhachTiem()
  {
    //$posts= Post::all();
    return view('admin.khachtiem.addkhachtiem');
  }
  public function adminAddLichTiemPhong()
  {
    //$posts= Post::all();
    return view('admin.lichtiemphong.addlichtiemphong');
  }
  public function adminAddDoiTuong()
  {
    //$posts= Post::all();
    return view('admin.lichtiemphong.adddoituong');
  }
  public function adminAddCanBo()
  {
    //$posts= Post::all();
    return view('admin.canbo.addcanbo');
  }
  public function adminAddLoaiTin()
  {
    //$posts= Post::all();
    return view('admin.tintuc.addloaitin');
  }
  public function adminAddTinTuc()
  {
    //$posts= Post::all();
    return view('admin.tintuc.addtintuc');
  }
}
