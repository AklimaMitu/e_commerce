<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ProductCategory;
use App\Product;

class ProductController extends Controller
{
	 public function add(Request $request){

	 	$categories = ProductCategory::all();
    	$request->session()->put('categories',$categories);
    	return view('Product.addProduct');
    }

    public function store(Request $request){
    
    	$category = DB::table('product_category')
    		->where('category_name', $request->cat)
    		->first();

    	if($request->hasFile('pic')){
    		date_default_timezone_set('Asia/Dhaka');
    		$file=$request->file('pic');
    		$filename=date('YmdHis').$file->getClientOriginalName();
    		
    		if($file->getMimeType()=='image/jpeg'){
    			$file->move('uploads',$filename);
    			$pro = new Product();
		    	$pro->title = $request->title;
		    	$pro->price = $request->price;
		    	$pro->stock = $request->stock;
		    	$pro->short_desc = $request->short_desc;
		    	$pro->category_id = $category->id;
		    	$pro->img_path = $filename;
		    	$pro->save();
		    	$request->session()->flash('addPromessage', 'Product Added Successfully!!');
		    	return redirect()->back();
		    			
    		}
    		else{
    			$request->session()->flash('addPromessage', 'Invalid image!!');
    		}
    		
    	}else{
    			echo 'File not selected!!';
    		}


    	
    }

    public function delete()
    {
    	return view('Product.deleteProduct');
    }

    public function deleteProductShow(Request $request)
    {
    	$category = DB::table('product_category')
    		->where('category_name', $request->cat)
    		->first();
    	$products = DB::table('products')
    		->where('category_id', $category->id)
    		->get();
    	$request->session()->flash('products',$products);
    	return redirect()->route('Product.delete');

    }

     public function update()
    {
    	return view('Product.updateProduct');
    }

    public function UpdateProductShow(Request $request)
    {
    	$category = DB::table('product_category')
    		->where('category_name', $request->cat)
    		->first();
    	$products = DB::table('products')
    		->where('category_id', $category->id)
    		->get();
    	$request->session()->flash('products',$products);
    	return redirect()->route('Product.update');

    }

    public function edit(Request $request){
    	$pro = Product::find($request->id);
    	$request->session()->put('product',$pro);
    	return view('Product.editProduct');
    }


    public function editConfirm(Request $request){
    
    	$category = DB::table('product_category')
    		->where('category_name', $request->cat)
    		->first();

    	if($request->hasFile('pic')){
    		date_default_timezone_set('Asia/Dhaka');
    		$file=$request->file('pic');
    		$filename=date('YmdHis').$file->getClientOriginalName();
    		
    		if($file->getMimeType()=='image/jpeg'){
    			$file->move('uploads',$filename);

    			$pro = Product::find($request->id);
		    	$pro->title = $request->title;
		    	$pro->price = $request->price;
		    	$pro->stock = $request->stock;
		    	$pro->short_desc = $request->short_desc;
		    	$pro->category_id = $category->id;
		    	$pro->img_path = $filename;
		    	$pro->save();
		    	$request->session()->flash('addPromessage', 'Product Updated Successfully!!');
		    	return redirect()->back();
		    			
    		}
    		else{
    			$request->session()->flash('addPromessage', 'Invalid image!!');
    		}
    		
    	}else{
    			echo 'File not selected!!';
    		}


    	
    }



   
}
