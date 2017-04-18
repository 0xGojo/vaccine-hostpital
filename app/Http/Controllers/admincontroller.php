<?php
namespace App\Http\Controllers;
//use App\Post;
class admincontroller extends  Controller
{
  public function getindex()
  {
    //$posts= Post::all();
    return view('admin.index');
  }
}
