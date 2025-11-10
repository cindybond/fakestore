<?php

require('functions.php');

$fakestore_url = 'https://fakestoreapi.com/products';

$response = callAPI($fakestore_url);

$products = prettify($response);

$categories = getCategories($products);
$categoryName = $_GET['category'] ?? null;

$filtered = [];
foreach($products as $product) {
    if ($product['category'] === $categoryName) {
        $filtered[] = $product;
    }
}

$products = $filtered;

require('views/index.view.php');