<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    </head>

    <body class="w3-container">

        <?php
            include 'db.php';

            $userid = $_GET['userid'];

            $sql = "SELECT * FROM users WHERE userid='$userid'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $avatar = $row['avatar'];
            $name = $row['userid'];
        ?>

        <div class="w3-card w3-padding w3-margin-top">
            <div class="w3-center">
                <img src="<?php echo $avatar; ?>" alt="Avatar" width="200px" class="w3-circle">
            </div>
            <p>
                <b>Name:</b>
                <?php echo $name; ?> 
            </p>

            <a href="user-view.php" class="w3-button w3-green">
                Back
            </a>
        </div>
    </body>
</html>