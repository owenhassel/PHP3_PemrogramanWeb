<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
</head>

<body class="w3-container w3-light-grey">

<div class="w3-card-4 w3-white w3-padding"
     style="width:400px; margin:auto; margin-top:50px;">

    <h2>User Registration</h2>

    <form method="POST" action="user-add.php">

        <p>
            <label>User ID</label>
            <input class="w3-input w3-border"
                   type="text"
                   name="userid"
                   required>
        </p>

        <p>
            <label>Passcode</label>
            <input class="w3-input w3-border"
                   type="password"
                   name="passcode"
                   required>
        </p>

        <p>
            <label>Retype Passcode</label>
            <input class="w3-input w3-border"
                   type="password"
                   name="retype_passcode"
                   required>
        </p>

        <button type="submit"
                class="w3-button w3-green">
            Insert
        </button>

        <a href="user-view.php"
           class="w3-button w3-red">
            Cancel
        </a>

    </form>

</div>

</body>
</html>