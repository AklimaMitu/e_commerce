<?php
	$user=session()->get('user');
?>

@extends('Layouts.Admin.header')
@section('content')

<center>
	<h3>User Home</h3>
<p>Welcome <strong>{{$user->name}}</strong></p>
</center>

@endsection