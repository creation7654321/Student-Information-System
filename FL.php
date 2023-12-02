<?php
include("config.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:H.php");
}
$email=mysqli_real_escape_string($al,$_POST['email']);
$pass=mysqli_real_escape_string($al,sha1($_POST['pass']));
if($_POST['email']==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email' AND password='$pass'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$email;
		header("location:H.php");
	}
	else
	{
		$msg="Incorrect Email ID or Password";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty login</title>
  <link rel="stylesheet" href="FL.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,300;1,700&display=swap"
    rel="stylesheet">
</head>

<body>
  <section class="header">

    <nav>
      <a href="index.html"><img src="khwopalogo-removebg-preview.png" width="5%"></a>
      <div class="nav-links">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="SR.php">STUDENT REGISTRATION</a></li>
          <li><a href="FL.php">FACLTY LOGIN</a></li>
          <li><a href="FR.php">FACULTY REGISTRATION</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-box">
        <div class="centerdown" align="center">
          
          <span class="subhead">Faculty login</span>
          
          <br />
          <br />
          
          <br />
          <br />
          <form method="post" action="">
         
        Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="email" class="fields" size="15" placeholder="Enter Email ID" /><br><br>
        Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="Password" required="required" name="pass" class="fields" size="15" placeholder="Enter password" /><br><br>
        
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="LOGIN" class="fields-show" />
          
          </form>
    </div>
    
  </section>
  

</body>

</html>