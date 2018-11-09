<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./CSS/signup_page.css">
	<title>Sign Up</title>
	<script src="validate.js"></script>
</head>
<body style="background: black;">
	<div class="imgg"></div>
		<div class="mainclass1"> 
			<p style="font-size: 3em; margin-top: 1em; text-align: center;"><strong>Sign Up!</strong></p>
				<form id="muser" action="user_insert.php" method="POST" onsubmit="return ValidateForm()">
					<p style="padding-left: 2em">Name:</p>
					<input class="forms" type="text" name="name" placeholder="Full Name">
					
					<p style="padding-left: 2em">E-mail ID:</p>
					<input class="forms"type="email" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					
					<p style="padding-left: 2em">Date of Birth:</p>
					<input class="forms" type="Date" name="dob" placeholder="DD/MM/YYYY">
					<p style="padding-left: 2em">Gender:</p>
					<select class="menu" name="gender">
						<option>Male</option>
						<option>Female</option>
					</select>
					<p style="padding-left: 2em">Select your class:</p>
					<select class="menu" name="class">
						<option>D1A</option>
						<option>D1B</option>
						<option>D2A</option>
						<option>D2B</option>
						<option>D2C</option>
						<option>D3A</option>
						<option>D4A</option>
						<option>D4B</option>
						<option>D5</option>
						<option>D6A</option>
						<option>D6B</option>
						<option>D7A</option>
						<option>D7B</option>
						<option>D7C</option>
						<option>D8A</option>
						<option>D9A</option>
						<option>D9B</option>
						<option>D10</option>
						<option>D11A</option>
						<option>D11B</option>
						<option>D12A</option>
						<option>D12B</option>
						<option>D12C</option>
						<option>D13A</option>
						<option>D14A</option>
						<option>D14B</option>
						<option>D15</option>
						<option>D16A</option>
						<option>D16B</option>
						<option>D17A</option>
						<option>D17B</option>
						<option>D17C</option>
						<option>D18A</option>
						<option>D19A</option>
						<option>D19B</option>
						<option>D20</option>
					</select>
					<p style="padding-left: 2em">Enter your roll number</p>
					<input type="number" name="roll_no" placeholder="Roll Number" class="forms">
					
					<p style="padding-left: 2em">Enter the skills you know:</p>
					<input class="forms" type="text" name="skillk" placeholder="For example, Machine Learning, Web Development...">
					<p style="padding-left: 2em">Describe yourself!</p>
					<input class="forms" type="text" name="des" placeholder="A short description ;)">
					
					<p style="padding-left: 2em">Username:</p>
					<input class="forms" type="text" name="username" placeholder="Username">
					
					<p style="padding-left: 2em">Password:</p>
					<input class="forms" type="Password" name="password" placeholder="Password">
					
					<p style="padding-left: 2em">Enter details about 2 projects you have done:</p>
					<p style="padding-left: 2em">Project 1</p>
					<input class="forms" type="text" name="title1" placeholder="Title 1">
					<input class="forms" type="text" name="description1" placeholder="Description"><br>
					
					<p style="padding-left: 2em">Project 2</p>
					<input class="forms" type="text" name="title2" placeholder="Title 2">
					<input class="forms" type="text" name="description2" placeholder="Description">
					
					<button class="next1" type="submit"><strong>Register!</strong></button>
					</form>
				</div>
				
		
</body>
</html>
