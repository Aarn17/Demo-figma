<?php
require_once __DIR__ . '/classes/Shape.php';

$shape = new Shape('red', 40, 40);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div
        class="shape"
        role="img"
        aria-label="Rood vierkant"
        style="background-color: <?= htmlspecialchars($shape->color, ENT_QUOTES, 'UTF-8') ?>; left: <?= $shape->x ?>px; top: <?= $shape->y ?>px;"
    ></div>
</body>
</html>