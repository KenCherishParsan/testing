<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Products</h1>
    <table>
        <tr>
            <?php foreach ($pro as $prod): ?>
            <li><a href="/editProduct/<?= $prod['id'] ?>"><?= $prod['ProductName']?></a></li>
            </tr>
        <?php endforeach;?>
    </table>
        <button><a href="/insertProduct/">Insert Product</a></button>
</body>
</html>