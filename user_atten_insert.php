<?php
include '../includes/connection.php';
    $name = $_POST['name'];
    $date = $_POST['date'];
    $ar_time = $_POST['ar_time'];

    // echo  $name,  $date, $ar_time;
    // die();

    $sql = "INSERT INTO attendance (name,date,ar_time) VALUES ('$name',
    '$date','$ar_time')";
    mysqli_query($db,$sql);

 header('location:user_present.php');
// ?>