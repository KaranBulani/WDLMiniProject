<!DOCTYPE html>
<?php
//include("config.php");
//include_once('user_display.php');
include('sessions.php');
$x = $_SESSION['username'];
$sql = "SELECT uid, username, name, email, dob, gender, class, roll_no,  skillk, des, title1, description1, title2, description2 FROM user WHERE username = '$x' ";
//$result = $conn->query($sql);
$result = mysqli_query($db,$sql);

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style_profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
  </head>
  <body>
    <div class="topnav">
      <a  class="active" href="profile.php">Profile</a>
		<a href="browse_projects.php">Browse Projects</a>
		<a href="post.php">Post Projects</a>
		<a href="myprojects.php">My Projects</a>
		<a href="logout.php" style="float: right;">Logout</a>		
    </div>

    <div class="profile_card">
    <div class="card">
      <?php
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		
		if($row["gender"] == 'Male') {
		?>
			<img src="./img/male.jpg" style="margin-top:10px; width:70%" alt="Male">
		<?php
		} else {
		?>
			<img src="./img/female.jpg" style="margin-top:15px;	 width:70%" alt="Female">
		<?php
		}
		?>
		
	    <h1><?php echo $row["name"]; ?></h1> 
		<p class="title"><?php echo $row["email"]; ?></p>
		<p><strong>Class &nbsp</strong><?php echo $row["class"]; ?></p>
		<p><strong>Roll No.&nbsp</strong><?php echo $row["roll_no"]; ?></p>
      <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
     </div>
     <p><button>Contact</button></p>
    </div>
  </div>
  
  <div class="center_des">
    <h2 class="dark">Personal Description</h2>
      <p class="white"><?php echo $row["des"]; ?></p>

  </div>

  <div class="right_skills">
    <h2 class="dark">Skills</h2>
    <div class="white">
    <p><?php echo $row["skillk"]; ?></p>
  </div>
  </div>

  <div class="projects">
    <h2 class="dark">Projects Done</h2>
    <div class="white">
    <h5 class="p_title"><?php echo $row["title1"]; ?></h5>
	<p><?php echo $row["description1"]; ?></p>
    
    </div>

    <div class="white">
    <h5 class="p_title"><?php echo $row["title2"]; ?></h5>
    <p><?php echo $row["description2"]; ?></p>
    </div>
		<?php }
		//$conn->close();
	?>

  </div>

  <footer>
    <p><h3>freeLancers. Copyright &copy; 2018</h3></p>
  </footer>


  </body>
</html>
