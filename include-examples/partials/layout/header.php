<?php
require __DIR__ . "/../data.php";
include_once __DIR__ . "/../functions.php";
?>
<header>
    <h3>
        Header di <?php echo $username; ?>
        <?php sayHello(); ?>
    </h3>
</header>