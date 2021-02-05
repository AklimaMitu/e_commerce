<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductDeleteController extends Controller
{
     public function destroy(Request $request){
     		$id=$request->id;
     		Product::destroy($id);
     		return redirect()->route('Product.delete');
     }
}
