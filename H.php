<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>H</title>
  <link rel="stylesheet" href="H.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,300;1,700&display=swap"
    rel="stylesheet">
</head>

<body>
  <section class="header">

    <nav>
      <img src="khwopalogo-removebg-preview.png" width="5%"></a>
    <div class="text-box">
        <div class="centerdown" align="center">
        <a style="color:gold;" href="submitmarksstu.php" class="cmd">Submit Marks</a><br><br>
        <a style="color:gold;" href="viewuserstu.php" class="cmd">View users</a><br><br>
        <a style="color:gold;" href="addsubjectstu.php" class="cmd">Add subjects</a><br><br>
        <a style="color:gold;" href="changepassstu.php" class="cmd">Change password</a><br><br>
        <a style="color:gold;" href="logoutstu.php" class="cmd">Logout</a><br><br>
          
    </div>
    
  </section>
  
</body>

</html>