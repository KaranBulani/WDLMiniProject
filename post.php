<!DOCTYPE html>

<?php
include('sessions.php');
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style_post.css">
    <!-- 
	<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	-->

  </head>
  <body>
	
		<div class="topnav">
		  <a href="profile.php">Profile</a>
			<a href="browse_projects.php">Browse Projects</a>
			<a class="active" href="post.php">Post Projects</a>
			<a href="myprojects.php">My Projects</a>
			<a href="logout.php" style="float: right;">Logout</a>
		</div>
		
		<form id="mproject" action="post_insert.php" method="POST">

		  <fieldset class="fields">

			<div class="main_head">Project Description</div>
			<div class="tab">

			   <label class="head">Title:</label><br>
			   <input class="ip_1" type="text" name="pro_title">

			  <label class="head">Descripiton:</label><br>
			  <textarea class="ip_ta" name="pro_description" ></textarea>
			  </div>
		</fieldset>

		<fieldset class="fields">
		  <div class="tab">
			<div class="main_head">Skill Set</div>
				<select class="ip_1" name="pro_skill">
				  <option value="0">Web Development</option>
				  <option value="1">Artificial Intelligence</option>
				  <option value="2">App Development</option>
				  <option value="3">Python</option>
				  <option value="4">C++</option>
				  <option value="5">Java</option>
				</select>
		  </div>
		</fieldset>


		<fieldset class="fields">
		  <div class="tab">
			<div class="main_head">Time</div>
			<label class="head">In how many days do you want your project to be ready:</label><br>
			<input class="ip_1"type="number" name="pro_time">
			<button class="button1" type="submit" >Submit</button>
		  </div>
		</fieldset>


		</form>
	
    <footer>
      <p><h3>freeLancers. Copyright &copy; 2018</h3></p>
    </footer>

  </body>
</html>
