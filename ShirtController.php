<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shirt;

class ShirtController extends Controller
{
   Public function save()
   {
   		$data = shirt::all();
   		return view('shirt',['data'=>$data]);
   }

    public function buy($req)
   {
   		$data = shirt::find($req);
   		return view('product1',['data'=>$data]);
   }
}
