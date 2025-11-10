<?php require('views/partials/header.php') ?>
<?php require('views/partials/nav.php') ?>

<main>
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-4 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
        <h2 class="mb-10 text-2xl font-semibold text-gray-800">
            <?= ($categoryName) ? ucwords($categoryName) : 'Products' ?>
        </h2>
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <?php foreach($products as $product) :?>
            <a href="/products?id=<?= $product['id'] ?>" class="group">
                <img src="<?= $product['image'] ?>" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                <h3 class="mt-4 text-sm text-gray-700"><?= $product['title'] ?> </h3>
                <p class="mt-1 text-lg font-medium text-gray-900"><?= '$' . $product['price']?></p>
            </a>
        <?php endforeach; ?>
        </div>
    </div>
    </div>

</main>