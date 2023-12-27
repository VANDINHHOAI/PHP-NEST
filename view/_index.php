<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nest</title>
    <link rel="stylesheet" href="public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="public/img/Logo/logo-tap.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    .cart.cart-active {
        right: 0;
        transition: .5s;
    }

    .fade {
        animation-name: fade;
        animation-duration: 2s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    .modal-menu {
        display: none;
    }

    .modal-menu.open {
        display: block;
    }

    .modal-container {
        animation: modalFadeIn ease .3s;
    }

    @keyframes modalFadeIn {
        from {
            opacity: 0;
            transform: translateX(-150px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    #toTop:active {
        transform: translateY(10px);
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #3bb77e;
        border-radius: 6px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>

<body class="bg-white p-2 md:p-0">
    <!-- ===Wrapper=== -->
    <div class="w-full">
        <!-- ===Header=== -->
        <?php include_once './view/inc/_header.php' ?>

        <!-- CART  -->
        <?php include_once './view/inc/_cart.php' ?>

        <!-- ===Banner=== -->
        <div class="py-5 h-[538px] md:h-auto">
            <div class="py-[10px] md:p-[10px] h-full">
                <!-- Slideshow-container -->
                <div class="slide-show max-w-full m-auto h-full ">
                    <div class="list-slide flex rounded-3xl h-full overflow-hidden">
                        <div class="slide fade min-w-full h-full px-5 md:px-[100px] py-[50px]" style="background: url(public/img/banner/slider-1-min.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <div class="w-full h-auto mb-10 text-left">
                                <h1 class="text-4xl md:text-7xl text-[#253d4e] font-semibold">Don't miss amazing<br>grocery deals</h1>
                            </div>
                            <div class="mb-10 md:mb-16">
                                <h1 class="text-3xl font-semibold text-[#7e7e7e]">Sign up for the daily newsletters</h1>
                            </div>
                            <div class="flex items-center">
                                <input class="min-h-[60px] w-full md:max-w-[330px] px-3 md:px-7 text-base rounded-l-full outline-none" type="text" placeholder="Your email address">
                                <input class="min-h-[60px] bg-green-500 px-3 md:px-7 text-white rounded-r-full cursor-pointer hover:bg-green-600" type="submit" value="Subscribe">
                            </div>
                        </div>

                        <div class="slide fade min-w-full h-full px-5 md:px-[100px] py-[50px]" style="background: url(public/img/banner/slider-2-min.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <div class="w-full h-auto mb-10 text-left">
                                <h1 class="text-4xl md:text-7xl text-[#253d4e] font-semibold">Fresh Vegetables<br>Big discount</h1>
                            </div>
                            <div class="mb-10 md:mb-16">
                                <h1 class="text-3xl font-semibold text-[#7e7e7e]">Save up to 50% on your first order</h1>
                            </div>
                            <div class="flex items-center">
                                <input class="min-h-[60px] w-full md:max-w-[330px] px-3 md:px-7 text-base rounded-l-full outline-none" type="text" placeholder="Your email address">
                                <input class="min-h-[60px] bg-green-500 px-3 md:px-7 text-white rounded-r-full cursor-pointer hover:bg-green-600" type="submit" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </div>

                <br>
            </div>
        </div>

        <!-- ===Content=== -->
        <!-- Content_container -->
        <div>
            <!-- Section_features categories -->
            <div class="md:px-[10px]">
                <div class="md:flex justify-between">
                    <!-- Title -->
                    <div>
                        <div class="text-2xl md:text-3xl text-center md:text-left font-semibold text-[#253d4e]">
                            <h1>Featured Categories</h1>
                        </div>
                    </div>
                    <!-- Nav_categories -->
                    <div class="w-auto mt-5 md:mt-0">
                        <ul class="flex flex-wrap justify-center gap-x-8 gap-y-3 md:gap-y-0 text-sm md:text-xl">
                            <li class="hover:text-[#3bb77e]"><a href="#">Cake & milk</a></li>
                            <li class="hover:text-[#3bb77e]"><a href="#">Coffee & Teas</a></li>
                            <li class="hover:text-[#3bb77e]"><a href="#">Pet Foods</a></li>
                            <li class="hover:text-[#3bb77e]"><a href="#">Vegetables</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Slide -->
                <!-- Container -->
                <div id="container" class="mt-5">
                    <!-- Slider-container -->
                    <div class="w-full overflow-hidden">
                        <div class="flex w-full gap-x-5">
                            <div class="group flex-1 py-5 bg-[#f2fce4] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-1.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Cake & Milk</span>
                                    <span class="text-[#7e7e7e]">11 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#fffceb] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-2.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Oganic Kiwi</span>
                                    <span class="text-[#7e7e7e]">6 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#ecffec] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-3.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Peach</span>
                                    <span class="text-[#7e7e7e]">6 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#feefea] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-4.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Read Apple</span>
                                    <span class="text-[#7e7e7e]">10 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#fff3eb] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-5.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Snacks</span>
                                    <span class="text-[#7e7e7e]">11 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#fff3ff] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-6.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Vegetables</span>
                                    <span class="text-[#7e7e7e]">6 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#f2fce4] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-7.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Strawberry</span>
                                    <span class="text-[#7e7e7e]">11 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#feefea] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-8.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Black plum</span>
                                    <span class="text-[#7e7e7e]">10 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#f2fce4] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-9.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Custard apple</span>
                                    <span class="text-[#7e7e7e]">10 items</span>
                                </div>
                            </div>

                            <div class="group flex-1 py-5 bg-[#feefea] rounded-xl hover:scale-105 cursor-pointer transition duration-500">
                                <img class="w-[80px] m-auto mb-5 hover:scale-105 transition duration-500" src="public/img/Feature_categories-img/cat-10.png" alt="Categories">

                                <div class="text-center flex flex-col">
                                    <span class="text-[#253d4e] group-hover:text-[#3bb77e] font-semibold">Coffee & Tea</span>
                                    <span class="text-[#7e7e7e]">11 items</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 md:mt-3">
                <div class="block md:flex">
                    <div class="flex-1 md:p-[10px] relative">
                        <img class="rounded-lg min-h-[300px] md:min-h-full object-cover" src="public/img/banner/banner-small-1.png" alt="">
                        <!-- Title -->
                        <div class="absolute top-20 left-12 min-w-[200px] text-xl md:text-2xl font-semibold">
                            <h1 class="text-[#253d4e]">Everyday Fresh & Clean with Our Products</h1>
                        </div>
                        <!-- Button -->
                        <button class="flex items-center gap-x-1 absolute py-1 px-3 top-2/3 left-12 bg-[#3bb77e] text-white rounded">
                            <a href="#">Shop now</a>
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>

                    <div class="flex-1 md:p-[10px] mt-5 md:mt-0 relative">
                        <img class="rounded-lg min-h-[300px] md:min-h-full object-cover" src="public/img/banner/banner-small-2.png" alt="">
                        <!-- Title -->
                        <div class="absolute top-20 left-12 max-w-[200px] text-xl md:text-2xl font-semibold">
                            <h1 class="text-[#253d4e]">Make your Breakfast Healthy and Easy</h1>
                        </div>
                        <!-- Button -->
                        <button class="flex items-center gap-x-1 absolute py-1 px-3 top-2/3 left-12 bg-[#3bb77e] text-white rounded">
                            <a href="#">Shop now</a>
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>

                    <div class="flex-1 md:p-[10px] mt-5 md:mt-0 relative">
                        <img class="rounded-lg min-h-[300px] md:min-h-full object-cover" src="public/img/banner/banner-small-3.png" alt="">
                        <!-- Title -->
                        <div class="absolute top-20 left-12 max-w-[200px] text-xl md:text-2xl font-semibold">
                            <h1 class="text-[#253d4e]">The best Organic Products Online</h1>
                        </div>
                        <!-- Button -->
                        <button class="flex items-center gap-x-1 absolute py-1 px-3 top-2/3 left-12 bg-[#3bb77e] text-white rounded">
                            <a href="#">Shop now</a>
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>

                </div>
            </div>

            <!-- ===Section Popular products=== -->
            <!-- Container -->
            <div class="mt-9">
                <div class="md:px-[10px]">
                    <div class="block md:flex items-center justify-between">
                        <div class="text-4xl text-[#253d4e] font-semibold">
                            <h1>Popular Products</h1>
                        </div>
                        <div class="mt-5 md:mt-0 text-base text-[#253d4e] font-semibold ">
                            <ul class="flex flex-wrap items-center justify-center gap-x-8 gap-y-2">
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">All</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Barking material</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Fresh Fruits</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Milk</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Meats</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Vegetables</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Products -->
                    <!-- Container -->
                    <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-5 gap-3 md:gap-6 mt-5">
                        <?php foreach ($productList as $product) { ?>
                            <div class="group mt-5 md:mt-0 border rounded-md hover:border-green-500 hover:shadow hover:scale-[1.01]
                            transition duration-300 ease-in-out cursor-pointer relative">
                                <a href="detail.php?id=<?php echo $product['id']; ?>">
                                    <div class="btn-more w-full px-6 pt-6">
                                        <img class="product-img" src="public/img/Products/<?php echo $product['image'] . ".jpg" ?>" alt="">
                                    </div>
                                </a>
                                <div class="px-5 pb-5">
                                    <span class="text-xs text-[#adadad]">Baking material</span>
                                    <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                        <a href="detail.php?id=<?php echo $product['id']; ?>" class="product-name btn-more"><?php echo $product['name'] ?></a>
                                    </div>
                                    <div class="flex items-center text-[#adadad]">
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <span class="ml-2">0</span>
                                    </div>
                                    <div>
                                        <span class="text-[#adadad]">By</span>
                                        <a href="#" class="text-green-500 hover:text-red-500">
                                            Country Crock
                                        </a>
                                    </div>
                                    <div class="md:flex justify-between items-center mt-3">
                                        <div>
                                            <span class="text-green-500 product-price">$<?php echo $product['price']; ?></span>
                                            <span class="text-[#adadad] text-xs">$19.80</span>
                                        </div>
                                        <form action="index.php" method="post">
                                            <input type="hidden" name="_method" value="create">
                                            <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                                            <input type="hidden" name="productName" value="<?php echo $product['name']; ?>">
                                            <input type="hidden" name="productImage" value="<?php echo $product['image']; ?>.jpg">
                                            <input type="hidden" name="productPrice" value="<?php echo $product['price']; ?>">
                                            <input type="hidden" name="quantity" value="1">
                                            <button class="mt-2 md:mt-0 w-full md:w-auto bg-[#def9ec] text-[#29a56c] font-semibold px-3 py-[6px] rounded
                                         hover:bg-green-500 hover:text-white">
                                                <i class='bx bx-cart'></i>
                                                Add
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="group-hover:block hidden absolute top-0 right-0">
                                    <div class="text-2xl text-green-500 border border-green-500 rounded hover:bg-green-500 hover:text-white">
                                        <a href="#"><i class='bx bx-heart'></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                </div>
                <div class="hidden sm:flex sm:items-center sm:justify-center">
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            <?php
                            echo '
                                <a href="index.php?page=' . 1 . '" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                </svg>
                            </a>
                                ';
                            ?>

                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                            <?php for ($i = 1; $i <= 2; $i++) { ?>
                                <?php echo '<a href="index.php?page=' . $i . '" aria-current="page" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">' . $i . '</a>' ?>
                            <?php } ?>

                            <?php
                            echo '
                                            <a href="index.php?page=' . 2 . '" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                            <span class="sr-only">Next</span>
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                            '
                            ?>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- ===Section Daily Best Sells=== -->
            <!-- Container -->
            <div class="mt-9">
                <div class="md:px-[10px]">
                    <div class="block md:flex items-center justify-between">
                        <div class="text-4xl text-[#253d4e] font-semibold">
                            <h1>Daily Best Sells</h1>
                        </div>
                        <div class="mt-5 md:mt-0 text-base text-[#253d4e] font-semibold ">
                            <ul class="flex flex-wrap items-center justify-center gap-x-8 gap-y-2">
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">All</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Deals Of The Day</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Beauty</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Bread & Juice</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Drinks</a>
                                </li>
                                <li class="hover:text-green-500 hover:-translate-y-1
                                transition-all duration-300 ease-in-out">
                                    <a href="#">Milks</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-5 gap-x-6 mt-5">
                        <div class="relative hidden md:block">
                            <div class="w-full h-full"><img class="rounded-lg h-full w-full" src="public/img/banner/banner-4.png" alt=""></div>
                            <div class="absolute top-1/4 left-2">
                                <h1 class="text-3xl font-semibold text-[#253d4e]">Bring natute into your home</h1>
                                <button class="flex items-center mt-5 text-white font-semibold bg-green-500 px-5 py-2 rounded-md">
                                    <a href="#">Shop now</a>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </button>
                            </div>
                        </div>

                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <div class="group mt-5 md:mt-0 border rounded-md hover:border-green-500 hover:shadow hover:scale-[1.01]
                        transition duration-300 ease-in-out cursor-pointer relative">
                                <a href="detail.php?imageProduct=<?php echo $productList[$i]['image']; ?> &nameProduct=<?php echo $productList[$i]['name']; ?>  &priceProduct=<?php echo $productList[$i]['price']; ?>">
                                    <div class="w-full px-6 pt-6">
                                        <img src="public/img/Products/<?php echo $productList[$i]['image'] ?>.jpg" alt="">
                                    </div>
                                </a>
                                <div class="px-5 pb-5">
                                    <span class="text-xs text-[#adadad]">Baking material</span>
                                    <div class="text-sm md:text-base text-[#253d4e] font-semibold hover:text-green-500">
                                        <a href="#"><?php echo $productList[$i]['name'] ?></a>
                                    </div>
                                    <div class="flex items-center text-[#adadad]">
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <span class="ml-2">0</span>
                                    </div>
                                    <div>
                                        <span class="text-[#adadad]">By</span>
                                        <a href="#" class="text-green-500 hover:text-red-500">
                                            Country Crock
                                        </a>
                                    </div>
                                    <div class="md:flex justify-between items-center mt-3">
                                        <div>
                                            <span class="text-green-500">$<?php echo $productList[$i]['price'] ?></span>
                                            <span class="text-[#adadad] text-xs">$19.80</span>
                                        </div>
                                        <button class="mt-2 md:mt-0 w-full md:w-auto bg-[#def9ec] text-[#29a56c] font-semibold px-3 py-[6px] rounded
                                    hover:bg-green-500 hover:text-white">
                                            <i class='bx bx-cart'></i>
                                            Add
                                        </button>
                                    </div>
                                    <div class="group-hover:block hidden absolute top-0 right-0">
                                        <div class="text-2xl text-green-500 border border-green-500 rounded hover:bg-green-500 hover:text-white">
                                            <a href="#"><i class='bx bx-heart'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- ===Section Deals Of The Day=== -->
            <!-- Container -->
            <div class="mt-9 px-0 md:px-[10px]">
                <div class="text-4xl text-[#253d4e] font-semibold">
                    <h1>Deal Of The Day</h1>
                </div>
                <div class="md:flex grid grid-cols-2 gap-y-5 gap-x-2 md:gap-x-6 mt-5">
                    <div class="group flex-1 relative h-[320px]">
                        <img class="rounded-lg" src="public/img/banner/DOTD_1.png" alt="">
                        <div class="group-hover:-translate-y-2 w-[95%] md:w-[90%] bg-white px-2 md:px-7 py-6 shadow rounded-lg absolute bottom-0 left-1/2 -translate-x-1/2
                        flex flex-col transition duration-300 ease-in-out">
                            <span class="text-[#253d4e] text-sm md:text-lg h-[55px] font-semibold hover:text-green-500">
                                <a href="#">Organic Cage Grade A Large Eggs</a>
                            </span>
                            <span class="text-[#b6b6b6] text-xs mt-2">By
                                <span class="text-green-500 hover:text-red-500">
                                    <a href="#">Hambger Hel</a>
                                </span>
                            </span>
                            <div class="block md:flex items-center justify-between mt-3">
                                <div>
                                    <span class="text-green-500 font-semibold underline">$21.00</span>
                                    <span class="text-xs text-[#b6b6b6] line-through">$24.00</span>
                                </div>
                                <button class="w-full md:w-auto bg-[#def9ec] text-lg text-green-500 px-6 py-2 md:py-1 font-semibold mt-2 md:mt-0
                                hover:text-white hover:bg-green-500 rounded">
                                    <a href="#"><i class='bx bx-cart mr-1'></i>Add</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="group flex-1 relative h-[320px]">
                        <img class="rounded-lg" src="public/img/banner/DOTD_2.png" alt="">
                        <div class="group-hover:-translate-y-2 w-[95%] md:w-[90%] bg-white px-2 md:px-7 py-6 shadow rounded-lg absolute bottom-0 left-1/2 -translate-x-1/2
                        flex flex-col transition duration-300 ease-in-out">
                            <span class="text-[#253d4e] text-sm md:text-lg h-[55px] font-semibold hover:text-green-500">
                                <a href="#">Naturally Flavored Cinnamon Vanilla Var</a>
                            </span>
                            <span class="text-[#b6b6b6] text-xs mt-2">By
                                <span class="text-green-500 hover:text-red-500">
                                    <a href="#">Hambger Hel</a>
                                </span>
                            </span>
                            <div class="block md:flex items-center justify-between mt-3">
                                <div>
                                    <span class="text-green-500 font-semibold underline">$51.00</span>
                                    <span class="text-xs text-[#b6b6b6] line-through">$55.00</span>
                                </div>
                                <button class="w-full md:w-auto bg-[#def9ec] text-lg text-green-500 px-6 py-2 md:py-1 font-semibold mt-2 md:mt-0
                                hover:text-white hover:bg-green-500 rounded">
                                    <a href="#"><i class='bx bx-cart mr-1'></i>Add</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="group flex-1 relative h-[320px]">
                        <img class="rounded-lg" src="public/img/banner/DOTD_3.png" alt="">
                        <div class="group-hover:-translate-y-2 w-[95%] md:w-[90%] bg-white px-2 md:px-7 py-6 shadow rounded-lg absolute bottom-0 left-1/2 -translate-x-1/2
                        flex flex-col transition duration-300 ease-in-out">
                            <span class="text-[#253d4e] text-sm md:text-lg h-[55px] font-semibold hover:text-green-500">
                                <a href="#">Seeds of Change Organic Watermelon</a>
                            </span>
                            <span class="text-[#b6b6b6] text-xs mt-2">By
                                <span class="text-green-500 hover:text-red-500">
                                    <a href="#">Hambger Hel</a>
                                </span>
                            </span>
                            <div class="block md:flex items-center justify-between mt-3">
                                <div>
                                    <span class="text-green-500 font-semibold underline">$61.50</span>
                                    <span class="text-xs text-[#b6b6b6] line-through">$66.00</span>
                                </div>
                                <button class="w-full md:w-auto bg-[#def9ec] text-lg text-green-500 px-6 py-2 md:py-1 font-semibold mt-2 md:mt-0
                                hover:text-white hover:bg-green-500 rounded">
                                    <a href="#"><i class='bx bx-cart mr-1'></i>Add</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="group flex-1 relative h-[320px]">
                        <img class="rounded-lg" src="public/img/banner/DOTD_4.png" alt="">
                        <div class="group-hover:-translate-y-2 w-[95%] md:w-[90%] bg-white px-2 md:px-7 py-6 shadow rounded-lg absolute bottom-0 left-1/2 -translate-x-1/2
                        flex flex-col transition duration-300 ease-in-out">
                            <span class="text-[#253d4e] text-sm md:text-lg h-[55px] font-semibold hover:text-green-500">
                                <a href="#">Dried fruit: apricots, figs, prunes</a>
                            </span>
                            <span class="text-[#b6b6b6] text-xs mt-2">By
                                <span class="text-green-500 hover:text-red-500">
                                    <a href="#">Hambger Hel</a>
                                </span>
                            </span>
                            <div class="block md:flex items-center justify-between mt-3">
                                <div>
                                    <span class="text-green-500 font-semibold underline">$56.00</span>
                                    <span class="text-xs text-[#b6b6b6] line-through">$76.00</span>
                                </div>
                                <button class="w-full md:w-auto bg-[#def9ec] text-lg text-green-500 px-6 py-2 md:py-1 font-semibold mt-2 md:mt-0
                                hover:text-white hover:bg-green-500 rounded">
                                    <a href="#"><i class='bx bx-cart mr-1'></i>Add</a>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Container -->
            <div class="mt-9">
                <div class="block w-full md:flex gap-x-6 px-[10px]">
                    <div class="flex-1">
                        <!-- Title -->
                        <div class="text-2xl text-[#253d4e] font-semibold pb-5 border-b">
                            <h1>Top Selling</h1>
                        </div>
                        <div class="w-28 h-[2px] bg-green-500"></div>
                        <!-- Products -->
                        <div class="mt-5">
                            <div class="px-3 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-3.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $22.85
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$24.80</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-7.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Seeds of Change Organic Red Rice</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $28.85
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$32.80</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-5.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Blue Almonds Lightly Salted Vegetables</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.85
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$25.80</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex-1 mt-10 md:mt-0">
                        <!-- Title -->
                        <div class="text-2xl text-[#253d4e] font-semibold pb-5 border-b">
                            <h1>Trending Products</h1>
                        </div>
                        <div class="w-28 h-[2px] bg-green-500"></div>
                        <!-- Products -->
                        <div class="mt-5">
                            <div class="px-3 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-1.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-3.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-6.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex-1 mt-10 md:mt-0">
                        <!-- Title -->
                        <div class="text-2xl text-[#253d4e] font-semibold pb-5 border-b">
                            <h1>Recently added</h1>
                        </div>
                        <div class="w-28 h-[2px] bg-green-500"></div>
                        <!-- Products -->
                        <div class="mt-5">
                            <div class="px-3 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-2.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-8.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-9.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex-1 mt-10 md:mt-0">
                        <!-- Title -->
                        <div class="text-2xl text-[#253d4e] font-semibold pb-5 border-b">
                            <h1>Top Rated</h1>
                        </div>
                        <div class="w-28 h-[2px] bg-green-500"></div>
                        <!-- Products -->
                        <div class="mt-5">
                            <div class="px-3 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-4.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-5.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3 mt-5 hover:-translate-y-2 transition duration-300 ease-in-out">
                                <div class="flex items-center justify-between">
                                    <!-- image -->
                                    <div class="w-20 h-20">
                                        <img class="w-20 h-20" src="public/img/Products/product-2.jpg" alt="">
                                    </div>
                                    <!-- info -->
                                    <div class="">
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Haagen Caramel Cone Ice Cream Boxed</a>
                                        </div>

                                        <div class="flex items-center text-[#7e7e7e]">
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bxs-star text-yellow-500'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <span class="ml-2">0</span>
                                        </div>
                                        <div>
                                            <span class="text-green-500 underline font-semibold">
                                                $23.05
                                            </span>
                                            <span class="text-[#7e7e7e] text-xs line-through">$50.05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ===Footer=== -->
        <?php include_once './view/inc/_footer.php' ?>

        <button id="toTop" class="w-12 h-12 bg-white border-2 border-[#253d4e] rounded-full fixed bottom-24 md:bottom-16 right-7
        hover:-translate-y-2 hover:text-red-500 transition duration-300 ease-in-out">
            <i class='bx bx-up-arrow-alt'></i>
        </button>
    </div>

    <!-- Menu-mobile-section -->
    <div class="modal-menu js-modal-menu fixed top-0 left-0 right-0 bg-slate-100 z-[1]">
        <div>
            <div>
                <div class="modal-container js-modal-container w-[90%] bg-white px-5">
                    <div class="py-2 bg-transparent text-2xl border-b">
                        <button class="js-modal-close"><a href="#"><i class='bx bx-x'></i></a></button>
                    </div>

                    <div class="flex justify-center flex-col py-5 bg-transparent">
                        <div class="flex items-center justify-between w-full h-8 bg-blue-300 shadow rounded">
                            <input class="bg-transparent w-full h-full border-none outline-none px-3" type="text" placeholder="Search...">
                            <div class="flex items-center bg-transparent h-full text-2xl">
                                <i class='bx bx-search-alt-2'></i>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex items-center justify-between gap-x-2">
                            <div class="px-5 py-2 w-1/2 bg-[#fde1bd] hover:text-green-500 text-center"><a href="#">Menu</a></div>
                            <div class="px-5 py-2 w-1/2 bg-[#eeeeee] hover:text-green-500 text-center"><a href="#">Category</a></div>
                        </div>

                        <div class="mt-3">
                            <ul>
                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">Home</a><i class='bx bx-chevron-down'></i>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">About</a>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">Shop</a><i class='bx bx-chevron-down'></i>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">Vendors</a><i class='bx bx-chevron-down'></i>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">Mega Menu</a><i class='bx bx-chevron-down'></i>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">Blog</a><i class='bx bx-chevron-down'></i>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 border-b font-semibold">
                                    <a href="#">Pages</a><i class='bx bx-chevron-down'></i>
                                </li>

                                <li class="w-full flex items-center justify-between py-3 font-semibold">
                                    <a href="#">Contact</a>
                                </li>

                            </ul>
                        </div>

                        <div class="w-full p-5 border rounded-lg">
                            <div><i class='bx bx-headphone text-green-500 mr-1'></i><span>0123456789</span></div>
                            <div><i class='bx bx-envelope only text-green-500 mr-1'></i><span>0123456789</span></div>
                            <div class="w-full bg-orange-400 text-center mt-3 py-3 text-white font-semibold rounded-lg">
                                <a href="login.html">Sign up</a>
                            </div>
                            <div class="w-full bg-green-500 text-center mt-3 py-3 text-white font-semibold rounded-lg">
                                <a href="login.html">Log in</a>
                            </div>
                        </div>

                        <div class="w-full mt-5">
                            <ul class="w-full flex items-center justify-center gap-x-2 text-3xl text-green-500">
                                <li><i class='bx bxl-facebook'></i></li>
                                <li><i class='bx bxl-twitter'></i></li>
                                <li><i class='bx bxl-skype'></i></li>
                                <li><i class='bx bxl-youtube'></i></li>
                                <li><i class='bx bxl-instagram-alt'></i></li>
                            </ul>
                        </div>

                        <div class="w-full text-center text-lg text-gray-500 mt-5">
                            <p>Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/swiper-bundle.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>