<!DOCTYPE html>
<html>
<head>
	<title>Sosta.com | Login Panel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
</head>
<body>
	

	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<input type="text" placeholder="Enter Email" name="uemail"/></br>
					
					<input type="password" placeholder="Enter Password" name="pass"/></br>
					
					<input style="width:20px;margin-left:40px;display:inline-block;float:left;" type="checkbox"  name="remember" /><h3 style="float:left;color:#fff;text-align:left;margin-top:20px;margin-left:10px;">Remember Me</h3></br>
					
					<input type="submit" value="Login" name="login_btn" />
					
					<a href="#"><input class="reg_btn" type="button" value="Register" name="reg_btn" /></a>
				
				</center>
			</form>
		</div>
	</div>

</body>
</html>