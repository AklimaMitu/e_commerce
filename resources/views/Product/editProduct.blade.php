<?php
	$user=session()->get('user');
	$pro=session()->get('product');
	$categories=session()->get('categories');
?>

@extends('Layouts.Admin.header')
@section('content')


	<div class="right_portion_pro"> 
		
			<div class="add_product_area">
				
				<div class="login_area">
					<h2 style="text-align:center; color:#FFF">Add Product</h2>
					<form method="POST" enctype="multipart/form-data">
						<center>
						
							<input type="text" placeholder="Product Title" name="title" value="{{$pro->title}}" /></br>
							
							<input type="text" placeholder="Price" name="price" value="{{$pro->price}}"/></br>
							
							<input type="text" placeholder="Stock" name="stock" value="{{$pro->stock}}"/></br>
							
							<textarea name="short_desc" placeholder="Short Description" style="width:80%;height:100px;margin-top:10px;">{{$pro->short_desc}}</textarea>
							
							<select class="gender_class" name="cat" id="cat" >
								<option class="option_class" value="">Select Category</option>
								@foreach($categories as $cat)
									@if($pro->category_id==$cat->id)
										<option class="option_class" value="{{$cat->category_name}}" selected="true">{{$cat->category_name}}</option>
									@endif
									<option class="option_class" value="{{$cat->category_name}}">{{$cat->category_name}}</option>
								@endforeach
								
							</select></br>
							<img src="{{asset('uploads')}}/{{$pro->img_path}}" alt="" style="height:150px; width:200px; margin-top:20px;" />
							<input name="pic" type="file"/></br>
							<input type="submit" name="add_product_btn" id="add_product_btn" value="Update Product"/>
							
						
						</center>
					</form>
					<p>{{session()->get('addPromessage')}}</p>
				</div>
			</div>	

	</div>




@endsection
