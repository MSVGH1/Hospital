<?php
session_start();
require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>

<head>
<title>Черга(список)</title>
<link rel="stylesheet" href="css/patient.css">


</head>
<body style="background-color:#e67e22">

<div id="main-wrapper">
    <center><h2>Черга(список)</h2>
    <img src="imgs/doctor.jpg" class="avatar"/>

    
    </center>
    <h2>Наступний пацієнт: </h2><br>
    <?php $query="select * from patientwait;";
   
    
    $query_run = mysqli_query($con,$query);
   

    $sql="SELECT * FROM patientwait;";
    $result= mysqli_query($con,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck >0){
      while($row= mysqli_fetch_assoc($result)){
        echo $row['qNum']."<br>";
      }
    }
    



    ?>
   


    
    <form class="myform" action="listOfPatients.php" method="post">
    <a href="patient.php">Клікніть сюди щоб отримати номер</a>

   
   
    
</form>

</div>

</body>

</html>