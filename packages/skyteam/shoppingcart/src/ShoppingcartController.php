<?php

namespace Skyteam\Shoppingcart;
use App\Cate;
use App\Product;
use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
class ShoppingcartController extends Controller
{
   public function muahang($id){
	   $product = DB::table('product')->where('Product_ID', $id)->first();
	   Cart::add(array(
					'id'=>$id
					,'name'=>$product->Product_Name
					,'qty'=>1,'price'=>$product->Product_Price
					,'options'=>array('img'=>$product->Product_Thumbnail)
            ));
           $content = Cart::content();
           return redirect()->route('giohang');
   }
   public function giohang(){
	   $content = Cart::content();
           dd($content);   
	   $total = Cart::total();
	   return view('layouts.product_cart', compact('content', 'total'));
   }
   public function xoasanpham($id){
	   Cart::remove($id);
	   return redirect()->route('giohang');
   }
}
