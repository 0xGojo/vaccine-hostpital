<?php
namespace App\Http\Controllers;
//use App\Post;
use Illuminate\Http\Request;
use App\loaivacxin;
use App\vaccine;
use App\khachtiem;
class adminedit extends  Controller
{
  public function adminAddVaccine()
  {
    $loaivaccines = loaivacxin::all();
    return view('admin.vaccine.addvaccine',['loaivaccines'=>$loaivaccines]);
  }
  public function AddVaccine(Request $request)
  {
    $this->validate($request,[
      'vaccine_name'=>'required',
      'tacdung'=> 'required',
      'chidinh'=>'required',
      'chongchidinh'=>'required',
      'price'=>'required|numeric',
    ]);
    $loaivaccine= loaivacxin::find($request['serivaccine']);
    if(!empty($loaivaccine)){
    $vaccine = new vaccine();
    $vaccine->name=$request['vaccine_name'];
    $vaccine->tacdung=$request['tacdung'];
    $vaccine->chidinh=$request['chidinh'];
    $vaccine->chongchidinh=$request['chongchidinh'];
    $vaccine->tacdungphu=$request['tacdungphu'];
    $vaccine->gia=$request['price'];
    $loaivaccine->vaccines()->save($vaccine);
    //$vaccine->loaivacxin_id=
   return redirect()->back()->with(['success'=>'them thanh cong']);
  }
   return redirect()->back()->with(['fail'=>'loai vaccine khong ton tai']);
  }

  public function adminAddKhachTiem()
  {
    //$posts= Post::all();
    return view('admin.khachtiem.addkhachtiem');
  }
  public function AddKhachTiem(Request $request)
  {
    $this->validate($request,[
      'name'=>'required|regex:/^[\pL\s\-]+$/u',
      'birthday'=> 'required|date',
      'address'=>'required',
      'username'=>'required|alpha_num|unique:khachtiems',
      'password'=>'required|alpha_num',
      'img'=>'image|mimes:jpg,png'
    ]);
    $khachtiem = new khachtiem();
    $khachtiem->name=$request['name'];
    $khachtiem->gioitinh=$request['gender'];
    $khachtiem->diachi=$request['address'];
    $khachtiem->ngaysinh=$request['birthday'];
    $khachtiem->username=$request['username'];
    $khachtiem->password=bcrypt($request['password']);
    if( $request->hasFile('img') ) {
        $file = $request->file('profile_image');
        $imagename =$request['username'] . '.' . $request->file('img')->getClientOriginalExtension();
        $request->file('img')->move(base_path().'/public/images/user/', $imagename);
       $khachtiem->path=  base_path() . '/public/images/user/'.$imagename;
    }
    else {
      $khachtiem->path= base_path().'/public/images/user/default.png';
    }
    $khachtiem->save();
   return redirect()->back()->with(['success'=>'them thanh cong']);
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
