<?php
include("config.php");
$roll=$_POST['roll'];
$x=mysqli_query($al,"SELECT * FROM students WHERE roll='$roll'");
$y=mysqli_fetch_array($x);
$sem=$y['sem'];
$name=$y['name'];
$a=mysqli_query($al,"SELECT * FROM marks WHERE roll='$roll' AND sem='$sem'");
$b=mysqli_fetch_array($a);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Result</title>
  <link rel="stylesheet" href="viewresultstu.css">
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
          <li><a href="index.php">EXIT</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-box">
        <div class="centerdown" align="center">
          
          <span class="subhead" style="color:#0F0;">Student details</span><br>
          <span class="labels" style="color:#C9F;">Name : <?php echo $name;?><br>Roll No.: <?php echo $roll;?><br>Semester : <?php echo $sem;?></span>
<?php $m=mysqli_query($al,"SELECT * FROM subjects WHERE sem='$sem'");
$n=mysqli_fetch_array($m);
?>
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td class="labels" style="text-decoration:underline;">Subject</td><td class="labels" style="text-decoration:underline;">Marks</td></tr>
<tr><td class="labels"><?php echo $n['s1'];?></td><td class="labels"><?php echo $b['s1'];?></td></tr>
<tr><td class="labels"><?php echo $n['s2'];?></td><td class="labels"><?php echo $b['s2'];?></td></tr>
<tr><td class="labels"><?php echo $n['s3'];?></td><td class="labels"><?php echo $b['s3'];?></td></tr>
<tr><td class="labels"><?php echo $n['s4'];?></td><td class="labels"><?php echo $b['s4'];?></td></tr>
<tr><td class="labels"><?php echo $n['s5'];?></td><td class="labels"><?php echo $b['s5'];?></td></tr>
<tr style="text-decoration:underline;color:#0F0;"><td class="labels">Total : </td><td class="labels"><?php echo $b['percent'];?> %</td></tr>
<tr><td class="labels">Result : </td><td style="color:#0F0;"><?php echo $b['result'];?></td></tr>
</table>

<br />
<br />

    </div>
    
  </section>
  

</body>

</html>