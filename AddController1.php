<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\tshirt;

class AddController1 extends Controller
{
     public function about1(Request $req)
  {
  	$data = new tshirt();

    $data->name           = $req->input('name');
    $data->slug           = $req->input('slug');
    $data->title          = $req->input('title');
    $data->description    = $req->input('description');
    $data->keyword        = $req->input('keyword');
    $data->size           = $req->input('size');
    $data->quantity       = $req->input('quantity');
    $data->color          = $req->input('color');

    if($req->hasfile('image1')) {
      $file = $req->file('image1');
      $extension = $file->getClientOriginalExtension();
      $filename1 = time(). '.' . $extension;
      $file->move('uploads/image1/', $filename1 );
      $data->image1 = $filename1;
    }
    else
    {
      return $req;
      $data->image1 ='';
    }
     
     if($req->hasfile('image2')) {
      $file = $req->file('image2');
      $extension = $file->getClientOriginalExtension();
      $filename2 = time(). '.' . $extension;
      $file->move('uploads/image2/', $filename2 );
      $data->image2 = $filename2;
    }
    else
    {
      return $req;
      $data->image2 ='';
    }

     if($req->hasfile('image3')) {
      $file = $req->file('image3');
      $extension = $file->getClientOriginalExtension();
      $filename3 = time(). '.' . $extension;
      $file->move('uploads/image3/', $filename3 );
      $data->image3 = $filename3;
    }
    else
    {
      return $req;
      $data->image3 ='';
    }

     if($req->hasfile('image4')) {
      $file = $req->file('image4');
      $extension = $file->getClientOriginalExtension();
      $filename4 = time(). '.' . $extension;
      $file->move('uploads/image4/', $filename4 );
      $data->image4 = $filename4;
    }
    else
    {
      return $req;
      $data->image4 ='';
    }
  
     $data->price          = $req->input('price');

    $data->save();

  

  return redirect('/t-shirt1');
  }

   public function save1()
  {
  	$data = tshirt::all();
  	return view('admin.t-shirt1',['data'=>$data]);
  }


  public function del1($id)
  {
  	$data = tshirt::find($id);
  	$data->delete();
  	return redirect('t-shirt1');
  }
}
