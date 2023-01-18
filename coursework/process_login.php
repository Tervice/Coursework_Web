<?php
include('config.php');
if (isset($_POST['submit'])) {
    $userid = $_POST['userid'];
    $password = ($_POST['password']);


    $res = mysqli_query($connect,"Select * from register where userid='$userid'");

    if (mysqli_num_rows($res)>0) {
        $row = mysqli_fetch_assoc($res);
        $verify = password_verify($password, $row['password']);
        if ($verify == 1) {
            // echo "done";
            $_SESSION['is_login'] = true;
            header('location:index.php');
            die();

        } else {
            echo "Invalid input";
            header('location:login.php');
        }
    } else {
        echo "Please enter correct userid";
        header('location:login.php');
    }
}
?>

