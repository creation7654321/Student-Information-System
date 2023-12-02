<?php
include("config.php");
$roll=$_POST['roll'];
$sem=$_POST['sem'];
$email=$_POST['email'];
$nam=$_POST['name'];

if($roll==NULL || $sem==NULL || $email==NULL || $nam==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"INSERT INTO students(name,roll,sem,email) VALUES('$nam','$roll','$sem','$email')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="Email Already Exists";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student registration</title>
  <link rel="stylesheet" href="SR.css">
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
          
          <span class="subhead">Student registration</span>
          
          <br />
          <br />
          <form method="post" action="">
            <h4 style="color:green";>
              <?php echo $msg; ?></h4>
            
            <br>
          
        Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="name" class="fields" size="15" placeholder="Enter your name" /><br><br>
        Roll:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter roll no" /><br><br>
      <div class="dropdown">Semester:<select name="sem" class="fields"  required>
<option value="" disabled="disabled" selected="selected">- - Semester - -</option>
<option  style="color:black;  value="1">First Sem</option>
<option  style="color:black;"  value="2">Second Sem</option>
<option style="color:black;" value="3">Third Sem</option>
<option style="color:black;" value="4">Fourth Sem</option>
<option style="color:black;" value="5">Fifth Sem</option>
<option style="color:black;" value="6">Sixth Sem</option>
<option style="color:black;" value="7">Seventh Sem</option>
<option style="color:black;" value="8">Eighth Sem</option>
</select></div><br>
        Email ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="email" required="required" name="email" class="fields" size="15" placeholder="Enter your email" /><br><br>
        
          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register" class="fields-show" />
          </form>
    </div>
    
  </section>
  

</body>

</html>