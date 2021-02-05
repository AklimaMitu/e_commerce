<?php
	$user=session()->get('user');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sosta.com | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
	
</head>
<body>
	<header class="menu">
	
		<div class="container">
			<div class="leftcontainer">
				<a href="#"><h1>SOSTA.COM</h1></a>
			</div>
			<div class="rightcontainer">
				<h3>Welcome</h3>
				<h3>{{$user->name}}</h3>
			</div>
		</div>
	</header>
	@extends('Layouts.Admin.leftmenu')
	


	
</body>
</html>