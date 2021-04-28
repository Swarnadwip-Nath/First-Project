<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shirt;
use App\Models\tshirt;
use App\Models\mask;
class CartController extends Controller
{

   Public function AddCart($id) 
   { 	
   		
   		$product = tshirt::find($id);
   		
   		$cart = session()->get('cart');

   	if(!$cart) {
   		$cart = [
   		   $product->id =>[
   				'name'  => $product->name,
   				'quantity' => 1,
   				'price'	=> $product->price,
   				'image' => $product->image1	
   				]   				
   			];
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   		}

   		if (isset($cart[$product->id])) {
   			$cart[$product->id]['quantity']++;
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   		}

   		$cart[$product->id] =[
   				'name'  => $product->name,
   				'quantity' => 1,
   				'price'	=> $product->price,
   				'image' => $product->image1	  				
   			];
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   }


    Public function AddCart1($id) 
   { 	
   		
   		$product = shirt::find($id);
   		
   		$cart = session()->get('cart');

   	if(!$cart) {
   		$cart = [
   		   $product->id =>[
   				'name'  => $product->name,
   				'quantity' => 1,
   				'price'	=> $product->price,
   				'image' => $product->image1	
   				]   				
   			];
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   		}

   		if (isset($cart[$product->id])) {
   			$cart[$product->id]['quantity']++;
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   		}

   		$cart[$product->id] =[
   				'name'  => $product->name,
   				'quantity' => 1,
   				'price'	=> $product->price,
   				'image' => $product->image1	  				
   			];
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   }


 Public function AddCart2($id) 
   { 	
   		
   		$product = mask::find($id);
   		
   		$cart = session()->get('cart');

   	if(!$cart) {
   		$cart = [
   		   $product->id =>[
   				'name'  => $product->name,
   				'quantity' => 1,
   				'price'	=> $product->price,
   				'image' => $product->image1	
   				]   				
   			];
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   		}

   		if (isset($cart[$product->id])) {
   			$cart[$product->id]['quantity']++;
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   		}

   		$cart[$product->id] =[
   				'name'  => $product->name,
   				'quantity' => 1,
   				'price'	=> $product->price,
   				'image' => $product->image1	  				
   			];
   			session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   } 







 Public function remove($id) 
 	{
 		$cart = session()->get('cart');

 		if(isset($cart[$id])) 
 		{
 			unset($cart[$id]);
 			session()->put('cart',$cart);
 		}
 		return redirect('cart')->with('sucess',"Remove from cart");
 	}

 	
 	public function changeQty(Request $request, $id)
 	{   		
 		//$product = tshirt::find($id);
 		$cart = session()->get('cart');
 		if($request->change_to === 'down')
 		{
 			if(isset($cart[$id]))
 			{
 				if($cart[$id]['quantity'] > 1)
 				{
 					$cart[$id]['quantity']--;
 						session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");

 				}else {
 					return $this->remove($id);
 				} 
 			}
 		}
 		else
 		{
 		if(isset($cart[$id]))
 				{
 					$cart[$id]['quantity']++;
 						session()->put('cart',$cart);
   			return redirect('cart')->with('sucess',"add to cart");
   			}	
 		}

 	}

}
