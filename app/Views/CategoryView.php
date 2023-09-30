<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Categories</h1>
    <table>
        <tr>
            <?php foreach ($category as $pro): ?>
            <li><a href="productView/<?= $pro['id'] ?>"><?= $pro['ProductCategory']?></a></li>
            </tr>
        <?php endforeach;?>
    </table>
        <button><a href="insertCategory/">Insert Category</a></button>
</body>
</html>