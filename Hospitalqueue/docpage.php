<?php
	session_start();
	require_once('dbconfig/config.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Сторінка доктора</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Домашня сторінка</h2></center>
        <center><h3>Вітаю Доктор <?php echo $_SESSION['username']; ?></h3></center>
        
        <h2>Наступний пацієнт у черзі: </h2><br>
    <?php $query="select * from patientwait;";
   
    
    $query_run = mysqli_query($con,$query);
   

    $sql="SELECT * FROM patientwait;";
    $result= mysqli_query($con,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck >0){
      while($row= mysqli_fetch_assoc($result)){
        echo $row['name']."<br>";
         echo $row['idno']."<br>";
          echo $row['qNum']."<br>";
      }
    }
    



    ?>
		
		<form action="docpage.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/doctor.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button name="logout" class="logout_button" type="submit">Вийти</button>	


			</div>
		</form>
				<?php
if(isset($_POST['logout']))
{
    session_destroy();
header('location: index.php');
}
?>
	</div>
</body>
</html>