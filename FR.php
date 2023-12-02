<?php
include("config.php");
$name=$_POST['name'];
$sem=$_POST['sem'];
$email=$_POST['email'];
$pass=sha1($_POST['pass']);

if($name==NULL || $sem==NULL || $email==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"INSERT INTO faculty(name,sem,email,password) VALUES('$name','$sem','$email','$pass')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="Email or Sem Already Exists";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Registration</title>
  <link rel="stylesheet" href="FR.css">
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
          
          <span class="subhead">Faculty registration</span>
          
          <br />
          <br />
          <form method="post" action="">
            <?php echo $msg;?><br>
          Faculty name:</td><td><input type="text" required="required" name="name" class="fields" size="15" placeholder="Enter faculty name" /><br><br> 
Semester&nbsp;:<select name="sem" class="fields"  required>
<option value="" disabled="disabled" selected="selected">- - Semester - -</option>
<option style="color:black;" value="1">First Sem</option>
<option style="color:black;" value="2">Second Sem</option>
<option style="color:black;" value="3">Third Sem</option>
<option style="color:black;" value="4">Fourth Sem</option>
<option style="color:black;" value="5">Fifth Sem</option>
<option style="color:black;" value="6">Sixth Sem</option>
<option style="color:black;" value="7">Seventh Sem</option>
<option style="color:black;" value="8">Eighth Sem</option>
</select></div><br><br>
        <br>Email ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="email" required="required" name="email" class="fields" size="15" placeholder="Enter your email" /><br><br>
        Password:<input type="password" name="pass" required="required" class="fields" size="15" placeholder="Enter password" />
          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register" class="fields-show" />
          </form>
          
    </div>
    
  </section>
  

</body>

</html>