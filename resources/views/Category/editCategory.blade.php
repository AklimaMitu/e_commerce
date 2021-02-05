<?php
	$user=session()->get('user');
	$category=session()->get('category');
?>

@extends('Layouts.Admin.header')
@section('content')
	<div class="add_category_area">
				
		<div class="login_area">
			<h2 style="text-align:center; color:#FFF">Add Category</h2>
			<form method="POST">
				<center>
					<input type="text" placeholder="Category Title" name="cat_title" value="{{$category->category_name}}" /></br>
					
					<textarea name="short_desc"  placeholder="Short Description" style="width:80%;height:100px;margin-top:10px;" >{{$category->short_desc}}</textarea>
					
					<input type="submit" name="add_category_btn" id="add_category_btn" value="Update Category"/>
					<p>{{session()->get('updateCatmessage')}}</p>
				
				</center>
			</form>
		</div>
	</div>
@endsection