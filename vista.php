<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuestro menú</h1>

    <h2>Pizzas</h2>
    <?php
    foreach ($pizzas as $pizza) : ?>
        <li>
            <?= $pizza -> __toString(); ?>
        </li>
        <?php endforeach; ?>
    <h2>Bebidas</h2>
    <?php
    foreach ($bebidas as $bebida) : ?>
        <li>
            <?= $bebida -> __toString(); ?>
        </li>
        <?php endforeach; ?>
    <h2>Otros</h2>
    <?php
    foreach ($otros as $articulo) : ?>
        <li>
            <?= $articulo -> __toString(); ?>
        </li>
        <?php endforeach; ?>


</body>
</html>