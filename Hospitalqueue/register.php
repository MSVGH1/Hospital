

</html>-->

<?php
	session_start();
	require_once('dbconfig/config.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Сторінка Реєстрації</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #ffffff">
	<div id="main-wrapper">
	<center><h2>Реєстрація доктора</h2>
		<form action="register.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/doctor.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Введіть ім'я користувача" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Введіть пароль" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Введіть пароль повторно" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Зариєструватися</button>
				
				<a href="index.php"><button type="button" class="back_btn"><< Назад до Login</button></a>
			</div>
		</form></center>
		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
				$query="select * from patientinfo WHERE username='$username'";
				

					
				$query_run = mysqli_query($con,$query);
			
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("Користувач вже існує.. Будь ласка виберіть інше ім`я!")</script>';
						}
						else
						{
							$query="INSERT INTO patientinfo VALUES('$username','$password')";
							$query_run=mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Користувача зареєстовано.. Вітаю")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: index.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Реєстрація не вдалася. Спробуйте пізніше</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("ДБ Error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password і Confirm Password не збігаються")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>