<!DOCTYPE html>
<?php
include('sessions.php');
$uid = $_SESSION['uid'];

$my_postsql    = "SELECT pid, pro_title, pro_description, pro_skill, pro_time FROM project where uid = $uid";
$my_postresult = mysqli_query($db,$my_postsql);

$my_selsql    = "SELECT p.pid as pid, p.pro_title as pro_title, p.pro_description as pro_description, p.pro_skill as pro_skill, p.pro_time as pro_time FROM project p , user u where u.uid = $uid and p.pid = u.pid";
$my_selresult = mysqli_query($db,$my_selsql);

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/style_myprojects.css">
    <title></title>
  </head>
  <body>

    <div class="topnav">
      <a href="profile.php">Profile</a>
		<a href="browse_projects.php">Browse Projects</a>
		<a href="post.php">Post Projects</a>
		<a class="active" href="myprojects.php">My Projects</a>
		<a href="logout.php" style="float: right;">Logout</a>
    </div>

    <div class="row">
		<div class="column">
			<h2 class="dark">Posted Projects</h2>
		    <div>
				<?php
					while ($row = mysqli_fetch_array($my_postresult,MYSQLI_ASSOC)) {
				?>
					<div class="white">
					<h5 class="p_title"><?php echo $row["pid"] . ' - ' . $row["pro_title"]; ?></h5>
					<p class="grey"><?php echo $row["pro_description"]; ?></p>
					<p><strong>Deadline <?php echo $row["pro_time"]; ?> days</strong></p><br><br>
					</div>
				<?php } 
					//$conn->close();
				?>
			</div>
		</div>
        
		<div class="column">
        <h2 class="dark">Project willing to work on</h2>
        <div>
		<?php
			while ($row1 = mysqli_fetch_array($my_selresult,MYSQLI_ASSOC)) {
		?>
			<div class="white">
			<h5 class="p_title"><?php echo $row1["pid"] . ' - ' . $row1["pro_title"]; ?></h5>
			<p class="grey"><?php echo $row1["pro_description"]; ?></p>
			<p><strong>Deadline <?php echo $row1["pro_time"]; ?> days</strong></p><br><br>
			
			</div>
		<?php } 
			//$conn->close();
		?>
        </div>
		</div>        
    </div>
    <footer>
      <p><h3>freeLancers. Copyright &copy; 2018</h3></p>
    </footer>
	

  </body>
</html>
