<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Loop name</title>
</head>
<body>
    <?php
    $name = "Zoe Potts";
    for ($i = 0; $i < 5; $i++) {
        echo "<p>$name</p>";
    }
    ?>
</body>
</html>