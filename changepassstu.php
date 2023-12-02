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
$pass=$b['password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['old']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	//ASL Do Nothing
}
else
{
if($old!=$pass)
{
	$msg="Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		$msg="New Password Didn't Matched";
	}
	else
	{
		mysqli_query($al,"UPDATE faculty SET password='$p2' WHERE email='$email'");
		$msg="Successfully Changed your Password";
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
  <link rel="stylesheet" href="changepassstu.css">
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
          
          <span class="subhead">Change password</span>
          
          <br />
          <br />
          <form method="post" action="">
          
          <?php echo $msg;?>
          <br>
         Old password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" required="required" name="old" class="fields" size="15" placeholder="Enter old password." /><br><br>
         New password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" required="required" name="p1" class="fields" size="15" placeholder="Enter new password." /><br><br>
         Re-type password:</td><td><input type="password" required="required" name="p2" class="fields" size="15" placeholder="Re-type your password." /><br>
          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Change password" class="fields-show" />
          
          </form>
    </div>
    
  </section>
  

</body>

</html>