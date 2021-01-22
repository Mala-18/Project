<?php

    include('connection.php');
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($con,$username);
    $password=mysqli_real_escape_string($con,$password);
    $sql="select * from user where Name='$username' and Password1='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1)
    {
        echo '<script type="text/javascript">';
        echo 'alert("login successful")';
        echo '<script/>';
        header('refresh:0;url=booking.html');

    }
    else{
        echo '<script type="text/javascript">';
        echo 'alert("Please recheck your username or password")';
        echo '</script>';
        header('refresh:0;url=login.html');
    }
?>