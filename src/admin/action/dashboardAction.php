<?php
session_reset();
include "../db.php";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=="admin" && $password=="admin"){
        header("location:../dashboard.php");
    }
    else{
        header("location:../index.php");
    }
}
else{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
