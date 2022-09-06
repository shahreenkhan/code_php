<?php
include'../includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
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
<script>  
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }  
  var a= document.getElementById("phone").value;
    if(a==""){
        document.getElementById("messages").innerHTML="** please fill mobile number";
        return false;
    }
    if(isNaN(a)){
        document.getElementById("messages").innerHTML="** Only numbers are allowed";
        return false;
    }
    if(a.length<10){
        document.getElementById("messages").innerHTML="** should be 10 digit";
        return false;
    }
    if(a.length>10){
        document.getElementById("messages").innerHTML="** should be 10 digit";
        return false;
    }
    }
</script>  
    
<div class="bgimg">
    <div class="centerdiv">
        <img src="https://previews.123rf.com/images/arcady31/arcady311203/arcady31120300010/12722630-free-registration-icon.jpg" class="img">
        <h2>REGISTRATION !</h2>
        <form name="myform" method="post" action="user_reg_insert.php" onsubmit="return validateemail();">
            <div>
                <input type="text" name="name" class="inputbox" placeholder="Enter name" required>
            </div><br>
            <div>
                <input type="text" name="email"  class="inputbox" placeholder="Enter Email" required>
            </div><br>
            
             <div>
                <input type="text" name="phone" id="phone" class="inputbox" placeholder="Enter Mobile Number" required>
            <span id="messages"></span></div><br>
             <div>
                <input type="password" name="password" class="inputbox" placeholder="Enter Password " required>
            </div><br>
            <div>
                <button type="submit" value="submit">SUBMIT</button>
            </div>
        </form>
        <p style="color:white; text-align:center;">Already have an account <a href="user_login.php">LOGIN</a> </p>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</script>
</body>
</html>