<?php
include('config.php');
if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $userid = $_POST['userid'];
$password = ($_POST['password']);
if(mysqli_num_rows(mysqli_query($connect,"select * from register where userid='$userid'"))>0){
}else{
  $password= password_hash($_POST['password'],PASSWORD_DEFAULT);

    mysqli_query($connect, "Insert into register(fullname,email,userid,password) values('$fullname','$email','$userid','$password') "); 
    header('location:login.php');
}
}
?>


