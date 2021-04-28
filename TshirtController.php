<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tshirt;

class TshirtController extends Controller
{
     Public function save()
   {
   		$data = tshirt::all();
   		return view('t-shirt',['data'=>$data]);
   }	

   public function buy($req)
   {
   		$data = tshirt::find($req);
   		return view('product',['data'=>$data]);
   }
}
