<?php require('views/partials/header.php') ?>
<?php require('views/partials/nav.php') ?>

<main>
    <div class="bg-white">
        <div class="pt-6 flex-auto">
            <?php foreach($filtered as $filter) : ?>
            <!-- Combined layout -->
            <div class="mx-auto mt-6 max-w-7xl px-4 sm:px-6 lg:px-8 lg:flex lg:gap-12">

                <!-- Image -->
                <div class="lg:w-1/2 flex justify-center items-start">
                    <img src="<?= $filter['image'] ?>" 
                        alt="<?= htmlspecialchars($filter['title']) ?>" 
                        class="rounded-lg object-contain max-h-[600px] w-auto" />
                </div>


                <!-- Product info -->
                <div class="lg:w-1/2">
                    <div class="max-w-2xl">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"><?= $filter['title'] ?></h1>
                        <p class="mt-4 text-3xl tracking-tight text-gray-900"><?= '$' . $filter['price'] ?></h1>
                        <p class="mt-4 text-3xl tracking-tig"></p>

                        <!-- Reviews -->
                        <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <?php 
                                $rating = $filter['rating']['rate']; // e.g., 4.3
                                $fullStars = floor($rating);        // 4
                                $halfStar = ($rating - $fullStars) >= 0.5 ? true : false;
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                            ?>
                            <?php for ($i = 0; $i < $fullStars; $i++): ?>
                                <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            <?php endfor; ?>

                            <?php if ($halfStar): ?>
                                <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="..."/> <!-- use a half-star SVG -->
                                </svg>
                            <?php endif; ?>

                            <?php for ($i = 0; $i < $emptyStars; $i++): ?>
                                <svg class="w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            <?php endfor; ?>

                            <p class="sr-only"><?= $rating ?> out of 5 stars</p>
                        
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500"><?= $filter['rating']['count'] ?> reviews</a>
                        </div>
                        </div>

                        <!-- Add to cart -->
                        <form class="mt-10">
                            <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-purple-700 px-8 py-3 text-base font-medium text-white hover:bg-purple-800 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">Add to bag</button>
                        </form>

                        <!-- Description -->
                        <div class="py-10 border-t border-gray-200 mt-8">
                            <p class="text-base text-gray-900"><?= $filter['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div> <!-- end of combined flex -->
            <?php endforeach; ?>
        </div>
    </div>
</main>

