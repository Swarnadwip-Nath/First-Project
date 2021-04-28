<?php

namespace App\Http\Controllers;

use App\Models\shirt;

use Illuminate\Http\Request;

class AddController extends Controller
{
  public function about(Request $req)
  {
  	$data = new shirt();

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

  

  return redirect('/shirt1');
  }

  
    public function save()
  {
  	$data = shirt::all();
  	return view('admin.shirt1',['data'=>$data]);
  }

  public function del($id)
  {
  	$data = shirt::find($id);
  	$data->delete();
  	return redirect('shirt1');
  }
}
