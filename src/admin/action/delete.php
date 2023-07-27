<?php
require_once "../db.php";
$id = $_GET['id'];
if (is_numeric($id)) {
    $sql = "DELETE FROM user WHERE id='$id'";
    if ($mysqli->query($sql)) {
        header('location:../dashboard.php');
    }
}
else{
    echo "عملیات انجام نشد";
}
