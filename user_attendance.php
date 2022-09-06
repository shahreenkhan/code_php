
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
    <title>Attendance form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Cinzel?query=cin">
    <style>
        *{
        margin: 0;
        padding: 0;
        font-family: 'cinzel',serif;
        font-size: ;
    }
        .img{
        width:120px;
        height: 120px;
        border-radius: 50%;
        position: relative;
        top: -60px;
        left: calc((350px - 120px)/2);
    }
        .bgimg{
        width: 100%;
        height:100vh;
        background-image: linear-gradient(27deg, #004E95 50%, #013A6B 50%) ;
    }
        .centerdiv{
        width: 350px;
        height: 400px;
        position: absolute;
        top: 50%;
        left: 50%;
        background-color: red;
        transform: translate(-50%, -50%);
        background-image: linear-gradient(27deg, #013A6B 50%, #004E95 50%) ;
         }
         h2{
            text-align: center;
            color: white;
            text-transform: uppercase;
            font-size: 2em;
            word-spacing: 10px;
            margin-top: -50px;
            text-shadow: -2px 2px 1px #0A84C6;
        }
        .inputbox{
            width: calc(100% - 40px);
            height: 30px;
            display: block;
            margin: auto;
            padding: 0 10px;
            }
            ::placeholder{
                letter-spacing: 2px;
                color: black;
            }   
            button{
            width: calc(100% - 40px);
            height: 30px;
            display: block;
            margin: auto;
            background-color: #0A84C6;
            border: none;
            }     

    </style>
</head>
<body>
    
<div class="bgimg">
    <div class="centerdiv">
        <img src="https://toppng.com//public/uploads/preview/attendance-student-icon-student-attendance-icon-11553429021zcrc3jrvvv.png" class="img">
        <h2>MARK YOUR ATTENDANCE !</h2>
        <form method="post" action="user_atten_insert.php">
            <div>
                <input type="text" name="name" class="inputbox" placeholder="Enter name">
            </div><br>
            <div>
                <input type="text" name="date" class="inputbox" placeholder="Enter date">
            </div><br>
            <div>
                <input type="text" name="ar_time" class="inputbox" placeholder="Enter arrival time">
            </div><br>
            <div>
                <button type="submit" value="submit" >SUBMIT</button>
            </div>
        </form>
        </div>
</div>

<div>
    <h2>WELCOME HOME PAGE</h2>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>