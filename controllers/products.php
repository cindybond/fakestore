<?php

require('functions.php');

$fakestore_url = 'https://fakestoreapi.com/products';

$response = callAPI($fakestore_url);

$products = prettify($response);

$categories = getCategories($products);
$id = $_GET['id'] ?? '';

$filtered = [];
foreach($products as $product) {
    if ($product['id'] === (int)$id) {
        $filtered[] = $product;
    }
}

require('views/products.view.php');