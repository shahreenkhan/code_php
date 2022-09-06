<?php
session_start();
?>
<?php
include '../includes/connection.php';

$email =$_POST['email'];
$password =$_POST['password'];

$data="select * from user_reg where email ='$email' and password='$password'";
$data = mysqli_query($db,$data);
// echo "<pre>";
// print_r($data);

 
echo $total = mysqli_num_rows($data);

$a = mysqli_fetch_array($data);
if($total == 1){
    $_SESSION['name']=$a['name'];
    $_SESSION['email']=$email;

    header('location:user_home.php');
}
else{
    echo "wrong  email OR password!";
}

?>