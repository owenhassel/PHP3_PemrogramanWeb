<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
</head>

<body class="w3-container w3-light-grey">

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $old_userid = $_POST['old_userid'];
    $userid = $_POST['userid'];
    $passcode = $_POST['passcode'];

    $sql = "UPDATE users 
            SET userid='$userid', passcode='$passcode'
            WHERE userid='$old_userid'";

    if (mysqli_query($conn, $sql)) {
        header("Location: user-view.php");
        exit();
    } else {
        echo "<div class='w3-panel w3-red'>Update failed</div>";
    }

} else {
    $userid = $_GET['userid'];

    $sql = "SELECT * FROM users WHERE userid='$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $userid = $row['userid'];
    $passcode = $row['passcode'];
}
?>

<div class="w3-card-4 w3-white w3-padding" style="width:400px; margin:auto; margin-top:50px;">
    <h2 class="w3-center">Update User</h2>
    <form method="POST">

        <input type="hidden"
               name="old_userid"
               value="<?php echo $userid; ?>">
        <p>
            <label>User ID</label>

            <input class="w3-input w3-border"
                   type="text"
                   name="userid"
                   value="<?php echo $userid; ?>"
                   required>
        </p>
        <p>
            <label>Passcode</label>

            <input class="w3-input w3-border"
                   type="text"
                   name="passcode"
                   value="<?php echo $passcode; ?>"
                   required>
        </p>
        <button type="submit"
                class="w3-button w3-green">
            Update
        </button>
        <a href="user-view.php"
           class="w3-button w3-red">
            Cancel
        </a>
    </form>
</div>
</body>
</html>