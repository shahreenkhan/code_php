<?php
include'../includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
       *{
        margin: 0;
        padding: 0;
        font-family: 'cinzel',serif;
        font-size: ;
    }
}
        .home{
        width: 100%;
        height:100vh;
        background-image: linear-gradient(27deg, #004E95 50%, #013A6B 50%) ;
      }

     
    </style>

</head>
<body  > 
    <!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#004E95">
  <img src="https://www.karunyagroup.com/img/karunya_group_logotab1.jpg" alt=""> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="user_home.php" style="color: white;">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_attendance.php" style="color: white;">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_atten_dis.php" style="color: white;">Attendance Display</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_logout.php"  style="color: white;">Log Out </a>
      </li>
    </ul>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>