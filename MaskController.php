<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mask;

class MaskController extends Controller
{
     Public function save()
   {
   		$data = mask::all();
   		return view('mask',['data'=>$data]);
   }

    public function buy($req)
   {
   		$data = mask::find($req);
   		return view('product2',['data'=>$data]);
   }
}
