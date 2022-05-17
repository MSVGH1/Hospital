<?php
	session_start();
	require_once('dbconfig/config.php');
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Doctor Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body >
	<div id="main-wrapper">
	<center><h2>Вхід для доктора</h2></center>
			<div class="imgcontainer">
        
                <img src="imgs/doctor.jpg" alt="Avatar" class="avatar"/>
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Введіть ім'я користувача" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Введіть пароль" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a>
				<a href="patient.php">Якщо ви пацієнт, клікніть сюди</a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
               
                $query="select * from patientinfo WHERE username = '$username' AND password = '$password'";

		
				$query_run = mysqli_query($con,$query);
			
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: docpage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("Користувача не існує")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Помилка в базі даних")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>