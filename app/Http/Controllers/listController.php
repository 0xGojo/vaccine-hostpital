<?php
namespace App\Http\Controllers;
//use App\Post;
use App\vaccine;
use App\khachtiem;
class listController extends  Controller
{
  public function getAdminVaccinePage()
  {
    //$posts= Post::all();
    $vaccines = vaccine::all();
    return view('admin.vaccine.listvaccine',['vaccines'=>$vaccines]);
  }
  public function getAdminKhachTiemPage()
  {
    $khachtiems= khachtiem::paginate(5);
    return view('admin.khachtiem.listkhachtiem',['khachtiems'=>$khachtiems]);
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
