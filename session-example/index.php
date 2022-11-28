<?php
session_start();
$username = $_GET["username"] ?? "";
if (!empty($username)) {
    $_SESSION["username"] = $username;
    var_dump($_SESSION);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="index.php" method="GET">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        <a href="dashboard.php">Vai alla dashboard</a>

    </main>

</body>

</html>