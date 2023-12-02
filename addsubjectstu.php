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
$sem=$b['sem'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
if($s1==NULL || $s2==NULL || $s3==NULL || $s4==NULL || $s5==NULL)
{
	// 
}
else
{	
	$sql=mysqli_query($al,"INSERT INTO subjects(s1,s2,s3,s4,s5,sem) VALUES('$s1','$s2','$s3','$s4','$s5','$sem')");
	if($sql)
	{
		$msg="Successfully Saved";
	}
	else
	{
		$msg="Already Saved for Your Sem";
	}
}
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information System</title>
  <link rel="stylesheet" href="addsubjectstu.css">
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
          <li><a href="H.php">HOME</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-box">
        <div class="centerdown" align="center">
          
          <span class="subhead">Add subjects</span>
          
          <br />
          <br />
          <form method="post" action="">
         
        Subject 1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="s1" class="fields" size="15" placeholder="Enter subject name" /><br><br>
        Subject 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="s2" class="fields" size="15" placeholder="Enter subject name" /><br><br>
        Subject 3:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="s3" class="fields" size="15" placeholder="Enter subject name" /><br><br>
        Subject 4:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="s4" class="fields" size="15" placeholder="Enter subject name" /><br><br>
        Subject 5:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" required="required" name="s5" class="fields" size="15" placeholder="Enter subject name" /><br><br>
          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SAVE" class="fields-show" />
          
          </form>
    </div>
    
          
          
    
  </section>
  

</body>

</html>