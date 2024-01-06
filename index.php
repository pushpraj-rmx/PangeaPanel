<?php
include 'includes/config/config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello <?= $visitor ?></h1>
    <p>Please Login <a href="hi">HI</a></p>

    <a href="<?= _BASE_URL_ ?>public">
        Login
    </a>


</body>

</html>