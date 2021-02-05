<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;

class ProductCategoryController extends Controller
{
    public function show(Request $request)
    {
    	$categories = ProductCategory::all();
    	$request->session()->put('categories',$categories);
    }

    public function addCategory()
    {
    	return view('Category.addCategory');
    }

    public function insertCategory(Request $request)
    {
    	$proCat = new ProductCategory();
    	$proCat->category_name = $request->cat_title;
    	$proCat->short_desc = $request->short_desc;
    	$proCat->save();
    	$request->session()->flash('addCatmessage', 'Category Added Successfully!!');
		return redirect()->back();

    }


    public function delete(Request $request)
    {
    	$cats = ProductCategory::all();
    	$request->session()->put('cats',$cats);
    	return view('Category.deleteCategory');
    }

    public function destroy(Request $request)
    {
    	
    	ProductCategory::destroy($request->id);
    	$request->session()->flash('delteCatmessage', 'Category Deleted Successfully!!');
		return redirect()->back();
    }

    public function update(Request $request)
    {
    	$cats = ProductCategory::all();
    	$request->session()->put('cats',$cats);
    	return view('Category.updateCategory');
    }

  	public function edit(Request $request){
    	$cat = ProductCategory::find($request->id);
    	$request->session()->put('category',$cat);
    	return view('Category.editCategory');
    }

    public function editConfirm(Request $request)
    {
    	$cat = ProductCategory::find($request->id);
    	$cat->category_name=$request->cat_title;
    	$cat->short_desc=$request->short_desc;
    	$cat->save();
    	$request->session()->flash('updateCatmessage', 'Category Updated Successfully!!');
		return redirect()->back();
    }
}
