<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/saveaProduct" method="post">
    <input type="hidden" name="id" value="<?=$pro['id'] ?>">
    <label>Product Name</label><br>
    <input type="text" name="ProductName" value="<?=$pro['ProductName'] ?>"><br>
    <label>Product Description</label><br>
    <input type="text" name="ProductDescription" value="<?=$pro['ProductDescription'] ?>"><br>
    <label>Quantity</label><br>
    <input type="number" name="ProductQuantity" value="<?=$pro['ProductQuantity'] ?>"><br>
    <label>Price</label><br>
    <input type="number" name="ProductPrice" value="<?=$pro['ProductPrice'] ?>"><br>
    <label>Category</label><br>
    <select name="ProductCategory"><br>
    <?php foreach($prod as $category): ?>
    <option value="<?= $category['id'] ?>"><?= $category['ProductCategory'] ?></option>
    <?php endforeach; ?>
    </select><br>
    <a href="/CategoryView/"><input type="submit" name="" value="Submit"></a>
    <button><a href="/delete/<?=$pro['id']?>">Delete</a></button>
    </form>
</body>
</html>