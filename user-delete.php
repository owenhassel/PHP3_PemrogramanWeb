<?php
include 'db.php';

$userid = $_GET['userid'];

$sql = "DELETE FROM users WHERE userid='$userid'";

if(mysqli_query($conn, $sql)){
    header("Location: user-view.php");
}else{
    echo "Delete failed";
}
?>