 <?php
include("config.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information System</title>
  <link rel="stylesheet" href="index.css">
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
      <br>
      <br>
      
      <h1>KHWOPA ENGINEERING COLLEGE</h1>
      <p>Khwopa Engineering College (KhEC), an undertaking of Bhaktapur Municipality, is Nepal's first community-based
        engineering college. KhEC was established in 2001 A.D. (2058 B.S.) in affiliation with the highly esteemed
        Purbanchal University, Nepal.</p>
        <div class="centerdown" align="center">
          
          <span class="subhead">View Details</span>
          
          <br />
          <br />
          <form method="post" action="viewresultstu.php">
         
           <?php echo $msg; ?> <br>
          Roll No:</td><td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter Roll No." />
          <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SHOW" class="fields-show" />
          
          </form>
    </div>
    
  </section>
  

</body>

</html>