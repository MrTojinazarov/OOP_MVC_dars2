<?php

use App\App;
use App\Models\Product;

include "autoload.php";
include "web.php";
include "App/Helpers/Helpers.php";

$app = new App();
echo $app->run();

$products = Product::getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>

<h1>Product List</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product->id?></td>
                    <td><?= $product->name ?></td>
                    <td><?= $product->price ?></td>
                    <td><?= $product->count ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No products available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="add_product.php">Add Product
