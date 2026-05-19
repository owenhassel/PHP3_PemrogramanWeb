<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="w3-container">
<?php
include 'db.php';

if(isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $delete_sql = "DELETE FROM users WHERE userid='$id'";
    mysqli_query($conn, $delete_sql);

    header("Location: user-view.php");
    exit();
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<h2>Characters</h2>
<table class="w3-table-all w3-hoverable">
    <tr class="w3-blue">
        <th>No.</th>
        <th>User ID</th>
        <th>Passcode</th>
        <th>Avatar</th>
        <th>Actions</th>
    </tr>

    <?php
    $no = 1;
    while($row = mysqli_fetch_assoc($result)) {
    ?>

    <tr>
        <td>
            <?php echo $no++; ?>
        </td>

        <td>
            <img src="<?php echo $row['avatar']; ?>"
            width="60px"
            class="w3-circle">
        </td>

        <td>
            <?php echo $row['userid']; ?>
        </td>

        <td>
            <?php echo $row['passcode']; ?>
        </td>

        <td>
            <a href="user-detail.php?userid=<?php echo $row['userid']; ?>"
               style="text-decoration: none; margin-right: 10px;">
                <i class="fa fa-folder"></i>
            </a>

            <a href="user-update.php?userid=<?php echo $row['userid']; ?>"
               style="text-decoration: none; margin-right: 10px;">
                <i class="fa fa-edit"></i>
            </a>

            <a href="user-view.php?delete=<?php echo $row['userid']; ?>"
               style="text-decoration: none;">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="user-form.php"
    class="w3-button w3-blue">
    Add User
</a>

</body>
</html>