<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./CSS/log_in.css">
	<title>Log In</title>
</head>
<body>
	<div class="imgg"></div>
		<div class="mainclass2"> 
			<p style="font-size: 3em; margin-top: 1em; text-align: center;"><strong>Log In!</strong></p>
				<form action="login.php" method="post">
					<p style="padding-left: 2em">Username:</p>
					<input class="forms" type="text" name="username" placeholder="Username">
					<p style="padding-left: 2em">Password:</p>
					<input class="forms" type="Password" name="password" placeholder="Password">
					<button class="next1" type="submit"><strong>Log In</strong></button>
				</form>
				<a href="signup_page.php" style="color: white; position: relative; bottom: 50px; left: 30px;">Click here to register!</a>
		</div>
</body>
</html>