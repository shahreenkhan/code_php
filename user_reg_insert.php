<?php
include '../includes/connection.php';
// require('session.php');
// if(isset($_POST['submit']))
// {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // echo  $name,  $email, $phone,$password;
    // die();

    $sql = "INSERT INTO user_reg (name,email,phone,password) VALUES ('$name',
    '$email','$phone','$password')";
    mysqli_query($db,$sql);

//     if(mysqli_query($db,$sql)){
//         echo "Registration has been successfully done";
//     }else{
//         echo "something missing";
//     }
 header('location:user_login.php');
    
// }
?>