<?php

require('functions.php');

$fakestore_url = 'https://fakestoreapi.com/products';

$response = callAPI($fakestore_url);

$products = prettify($response);

$categories = getCategories($products);
$categoryName = $_GET['category'] ?? '';

require('views/index.view.php');