
<?php
include'../includes/connection.php';
include'../pages/user_header.php';
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
    
		.wel {
        text-align: center;
        color: white;
        font-size: 2em;
        word-spacing: 10px;
        font-family:cursive;
        }
        .home{
        width: 100%;
        height:100vh;
        background-image: linear-gradient(27deg, #004E95 50%, #013A6B 50%) ;
      }

     
    </style>

</head>
<body>
    <!-- display table -->
    <div class="home">
   <div class="wel">
    <h1>WELCOME USER TO YOUR DASHBOARD !</h1>
   <h4>YOU ARE REACHED AT THIS TIME AND DATE !</h4>
   <img src="img/smile1.png" alt="" class="img"><br>
    <?php
  
    $timeZone = date_default_timezone_set('Asia/kolkata')."<br>";
    //echo "The current server timeZone is: ".$timeZone;
    
    echo date('d l M')."<br>";
    echo date("h:i:sA");

    ?>
  
   
   </div>
</div>
</body>