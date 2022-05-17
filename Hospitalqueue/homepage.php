<?php
	session_start();
	require_once('dbconfig/config.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Домашня сторінка</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Домашня сторінка</h2></center>
		<center><h3>Вітаю <?php echo $_SESSION['name']; ?></h3>
		<h4>Ваш номер <?php echo $_SESSION['qNum'] ?> у черзі.</h4>
	
	</center>
		
		<form action="homepage.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/doctor.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button name="logout" class="logout_button" type="submit">Вихід</button>	
			</div>
		</form>
		<?php
if(isset($_POST['logout']))
{
    session_destroy();
header('location: patient.php');
}
?>
	</div>
</body>
</html>