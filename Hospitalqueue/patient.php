<?php
session_start();
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>

<head>
<title>Сторінка пацієнта</title>
<link rel="stylesheet" href="css/patient.css">
</head>
<body >

<div id="main-wrapper">
    <center><h2> Реєстрація пацієнта</h2>
    <img src="imgs/doctor.jpg" class="avatar"/>
    </center>


<form class="myform" action="patient.php" method="post">
    <label>Name:</label><br>
    <input name="name" type="text" class="inputvalues" placeholder="Ім`я" required/>
    <br>
    <label>Lastname:</label><br>
    <input name="surname" type="text" class="inputvalues" placeholder="Прізвище" required/><br>

    <label>Telephon number:</label><br>
    <input name="idno" type="text" class="inputvalues" placeholder="Номер телефону" required/><br>


    <input name="submit_btn" type= "submit" id="signup_btn"  value="Sign Up"/><br>
    <a href="index.php"><input type="button" id="back_btn" value="Back"/></a><br>
    
</form>

<?php
  if(isset($_POST['submit_btn']))
  {
    

      $name = $_POST['name'];
      $surname=$_POST['surname'];
      $idno= $_POST['idno'];
      $qNum=rand (1, 99);

      $_SESSION['name']= $name;
      $_SESSION['qNum']= $qNum;

      
          {
            $query="INSERT INTO patientWait VALUES('$name','$surname','$idno','$qNum')";
            $query_run=mysqli_query($con,$query);

            if($query_run)
            {
             echo '<script type="text/javascript"> alert("Користувач успішно зареєстрований.  :)") </script>';
            }
            else{
             echo '<script type="text/javascript"> alert("Error") </script>';
            }

            header('location:homepage.php');


        }

   
         

      }
     

  
?>

</div>

</body>

</html>