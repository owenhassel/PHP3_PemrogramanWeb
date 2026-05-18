<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userid = $_POST["userid"];
    $passcode = $_POST["passcode"];
    $avatar = "img_avatar.png";

    $sql = "INSERT INTO users(userid, passcode, avatar)
            VALUES('$userid', '$passcode', '$avatar')";

    if (mysqli_query($conn, $sql)) {
        header("Location: user-view.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>