<?php
include_once __DIR__ . "/partials/functions.php";
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
    <?php
    include __DIR__ . "/partials/layout/header.php";
    ?>
    <main>
        <?php
        echo $username;
        ?>
        <h1>Questo è il main</h1>
        <p><?php sayHello(); ?></p>
    </main>

    <?php
    include __DIR__ . "/partials/layout/footer.php";
    ?>

</body>

</html>