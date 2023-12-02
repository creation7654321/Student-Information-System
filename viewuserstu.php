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
$sem=$b['sem'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Users</title>
  <link rel="stylesheet" href="viewusersstu.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,300;1,700&display=swap"
    rel="stylesheet">
</head>

<body>
  <section class="header">

    <nav>
      <a href=""><img src="khwopalogo-removebg-preview.png" width="5%"></a>
      <div class="nav-links">
        <ul>
          <li><a href="H.php">HOME</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-box">
        <div class="centerdown" align="center">
          
          <span class="subhead">View Users</span>
          
          <br />
          <br />
          <table cellpadding="3" cellspacing="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#C60;"><th>Sr.No.</th><th>Roll No.</th><th>Name</th><th>Email</th><th>Delete</th></tr>
<?php 
$i=1;
$x=mysqli_query($al,"SELECT * FROM students WHERE sem='$sem'");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;color:white;">
<td><?php echo $i;$i++;?></td>
<td><?php echo $y['roll'];?></td>
<td><?php echo $y['name'];?></td>
<td><?php echo $y['email'];?></td>
<td><a href="deletestu.php?del=<?php echo $y['id'];?>" onclick="return confirm('Are You Sure..?');" class="link" style="font-size:14px;color:red;">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>
</section>
  

</body>

</html>