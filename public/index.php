<?php
    require_once(dirname(__FILE__, 2) . '/src/config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In-N-out</title>
</head>
<body>
    <?php
        Database::getConnection();
    ?>
</body>
</html>
