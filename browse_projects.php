<!DOCTYPE html>

<?php
include('sessions.php');
$uid = $_SESSION['uid'];


if (isset($_POST['pro_skill'])){
	$pro_skill = $_POST['pro_skill'];
} else { 
	$pro_skill = "9999999999";
}



if ( ($pro_skill != "9999999999")) {
	$sql = "SELECT pid, pro_title, pro_description, pro_skill, pro_time FROM project where pro_skill = $pro_skill";
} else {
	$sql = "SELECT pid, pro_title, pro_description, pro_skill, pro_time FROM project";
}
$result = mysqli_query($db,$sql);

$my_selsql    = "SELECT p.pid as pid FROM project p , user u where u.uid = $uid and p.pid = u.pid";
$my_selresult = mysqli_query($db,$my_selsql);
$row1 = mysqli_fetch_array($my_selresult,MYSQLI_ASSOC);

//$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
//$result = $conn->query($sql);

?>

<html>
	<head>
		<title>Browse Projects</title>
		<link rel="stylesheet" type="text/css" href="browse_projects.css">
	</head>
<body>
    
	<div class="topnav">
		<a href="profile.php">Profile</a>
		<a class="active" href="browse_projects.php">Browse Projects</a>
		<a href="post.php">Post Projects</a>
		<a href="myprojects.php">My Projects</a>
		<a href="logout.php" style="float: right;">Logout</a>
	</div>
	

	
	<div class="sidebar">

		<fieldset class="fields">
			<form id="mproject1" action="browse_projects.php" method="POST">
			<div class="tab">
				<div class="main_head"><strong>Skill Set</strong></div>
				<select class="ip_1" name="pro_skill" style="padding: 1em; width:100%; border-radius: 20px; margin-top:1em; margin-bottom:1em;">
				  <option value="9999999999" <?php if (($pro_skill == 9999999999)) { ?> selected <?php } ?> >Select All</option>
				  <option value="0" <?php if (($pro_skill == 0)) { ?> selected <?php } ?> >Web Development</option>
				  <option value="1" <?php if (($pro_skill == 1)) { ?> selected <?php } ?> >Artificial Intelligence</option>
				  <option value="2" <?php if (($pro_skill == 2)) { ?> selected <?php } ?> >App Development</option>
				  <option value="3" <?php if (($pro_skill == 3)) { ?> selected <?php } ?> >Python</option>
				  <option value="4" <?php if (($pro_skill == 4)) { ?> selected <?php } ?> >C++</option>
				  <option value="5" <?php if (($pro_skill == 5)) { ?> selected <?php } ?> >Java</option>
				</select>
				<button class="button1" type="submit" style="background-color: #0000ff;
		color: white;
		padding: 10px;">Check Out!</button>
			</div>
			</form>
		</fieldset>
	</div>
	<div class="boxes">			
	
		<?php
			if (mysqli_num_rows($result) == 0 ) {
				?>
				<h1>No rows found</h1>
				<?php
			}
			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		?>
		<form id="mproject" action="select_project.php" method="POST">
			<h1><?php echo $row["pid"] . ' - ' . $row["pro_title"]; ?></h1>
			<p><?php echo $row["pro_description"]; ?></p>
			<p><strong>Deadline <?php echo $row["pro_time"]; ?> days</strong><br><br>
			<input type="hidden" id="pid_<?php echo $row["pid"]?>" name="pid" value="<?php echo $row["pid"]?>">
			<?php

			if ($row["pid"] == $row1["pid"]) 
			{
			?>
				<button class="takeit" disabled>Take it up!</button><br><br>
			<?php
			} else {
			?>
				<button class="takeit">Take it up!</button><br><br>  
			<?php 
			}
			?>
		</form>
		<?php 
		} 
			//$conn->close();
		?>
		
	</div>

	<footer>
		<h3><p>freeLancers. Copyright &copy; 2018</p></h3>
	</footer>
	
	
</body>
</html>