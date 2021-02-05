<?php
	$user=session()->get('user');
	$cats=session()->get('cats');
?>

@extends('Layouts.Admin.header')
@section('content')
	<center> 
		<table border="1px" style="font-size:20px; padding:10px;">
				
				@if($cats !=null)
				<tr > 
					<td style="font-size:20px; padding:10px;">ID</td>
					<td style="font-size:20px; padding:10px;">Title</td>
					<td style="font-size:20px; padding:10px;">Price</td>
					<td style="font-size:20px; padding:10px;">Delete</td>
				</tr>
				@foreach($cats as $cat)
					<tr > 
						<td style="font-size:20px; padding:10px;">{{$cat->id}}</td>
						<td style="font-size:20px; padding:10px;">{{$cat->category_name}}</td>
						<td style="font-size:20px; padding:10px;">{{$cat->short_desc}}</td>
						<td style="font-size:20px; padding:10px;"> <a href="{{route('Category.destroy',[$cat->id])}}">delete</a></td>
					</tr>
				@endforeach
				@endif
			</table>
			<p>{{session()->get('delteCatmessage')}}</p>
	</center>
@endsection