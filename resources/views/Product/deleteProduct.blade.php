<?php
	$user=session()->get('user');
	$products=session()->get('products');
	$categories=session()->get('categories');
?>

@extends('Layouts.Admin.header')
@section('content')
		<div class="delete_area_right"> 
	
		<div class="add_category_area" style="margin-left: 0px;width: 50%; float:left;">
				
			<div class="login_area">
				<h2 style="text-align:center; color:#FFF">Select Category</h2>
				<form method="POST">
					<center>
						<select class="gender_class" name="cat" id="cat" >
							<option class="option_class" value="">Select Category</option>
							@foreach($categories as $cat)
								<option class="option_class" value="{{$cat->category_name}}">{{$cat->category_name}}</option>
							@endforeach
							
						</select></br>
						
						<input type="submit" name="selectCat" id="selectCat" value="Select"/>
						
					
					</center>
				</form>
			</div>
		</div>
		<div class="delete_pro_area"> 
			<table border="1px" style="font-size:20px; padding:10px;">
				
				@if($products !=null)
				<tr > 
					<td style="font-size:20px; padding:10px;">ID</td>
					<td style="font-size:20px; padding:10px;">Title</td>
					<td style="font-size:20px; padding:10px;">Price</td>
					<td style="font-size:20px; padding:10px;">Delete</td>
				</tr>
				@foreach($products as $pro)
					<tr > 
						<td style="font-size:20px; padding:10px;">{{$pro->id}}</td>
						<td style="font-size:20px; padding:10px;">{{$pro->title}}</td>
						<td style="font-size:20px; padding:10px;">{{$pro->price}}</td>
						<td style="font-size:20px; padding:10px;"> <a href="{{route('Product.destroy',[$pro->id])}}">delete</a></td>
					</tr>
				@endforeach
				@endif
			</table>
		</div>
	
	</div>
@endsection
