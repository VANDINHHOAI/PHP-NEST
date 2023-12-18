<div>
    <!-- Header-mobile -->
    <div class="w-full h-auto px-9 py-3 text-center font-semibold text-[#253d4e] rounded-md
                md:hidden" style="background: url(public/img/banner/banner_mobile.jpg);">
        <h3>Senior's Member Discount Days! Save 25% Each Tuesday</h3>
    </div>

    <!-- Header-desktop -->
    <div class="border-b px-2 text-[#7e7e7e]">
        <div class="hidden justify-between py-2 text-sm
                    md:flex">
            <div>
                <ul class="flex">
                    <li class="px-2"><a href="#">About Us</a></li>
                    <li class="px-2 border-l"><a href="#">My Account</a></li>
                    <li class="px-2 border-l"><a href="#">Wishlist</a></li>
                    <li class="px-2 border-l"><a href="#">Order Tracking</a></li>
                </ul>
            </div>

            <div class="text-[#3bb77e] font-bold">
                <span>100% Secure delivery without contacting the courier</span>
            </div>

            <div class="flex">
                <span class="px-2">Need help?</span>
                <span class="px-2">Call us:<a href="#"><span class="text-[#3bb77e]">+1800900122</span></a></span>
                <div class="group mt-5 md:mt-0 border-l px-2 relative">
                    <a class="py-4" href="#">English <i class='bx bx-chevron-down'></i></a>
                    <ul class="bg-white w-28 border hidden group-hover:block absolute top-7 right-0 text-center">
                        <li class="hover:bg-yellow-400 cursor-pointer"><a href="#">Vietnamese</a></li>
                    </ul>
                </div>
                <div class="group border-l px-2 relative">
                    <a class="py-4" href="#">USD<i class='bx bx-chevron-down'></i></a>
                    <ul class="bg-white w-28 border hidden group-hover:block absolute top-7 right-0 text-center">
                        <li class="hover:bg-yellow-400 cursor-pointer"><a href="#">VND</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[30px] border-b">
        <div class="md:px-[15px]">
            <div class="md:flex items-center justify-between">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="w-32 md:w-44">
                        <a href="index.php"><img src="public/img/Logo/logo.png" alt="Logo"></a>
                    </div>

                    <div class="md:hidden text-3xl">
                        <ul class="flex">
                            <li class="mr-2"><a href="#"><i class='bx bx-cart'></i></a></li>
                            <li class="ml-2 js-menu-btn"><a href="#"><i class='bx bx-menu'></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Search -->
                <form action="shop.php" method="get">
                    <div class="mt-4 md:mt-0 md:w-[438px] flex justify-between border md:border-2 border-[#3bb77e] p-1 rounded text-sm">
                        <input id="productInput" name="search" class="w-full outline-none px-5" type="text" placeholder="Search for products...">
                        <button id="searchBtn" type="submit" class="bg-[#3bb77e] px-5 py-2 h-full rounded text-white font-semibold hover:bg-yellow-400
                                    transition duration-200 ease-in">
                            Search
                        </button>
                    </div>
                </form>

                <!-- Other button -->
                <div class="md:flex items-center border py-2 px-4 hover:translate-x-2 transition duration-500 ease-in-out text-[#3bb77e] shadow-md
                            hidden">
                    <a href="#">Became Vendor</a>
                    <i class='bx bx-right-arrow-alt'></i>
                </div>

                <div class="hidden md:block">
                    <ul class="flex text-gray-700">
                        <li class="mx-3 text-3xl"><a href="#"><i class='bx bx-git-compare'></i></a></li>
                        <li class="mx-3 text-3xl"><a href="#"><i class='bx bx-heart'></i></a></li>
                        <li class="group mx-3 text-3xl relative" id="cart-icon">
                            <a href="#"><i class='bx bx-cart'></i></a>
                            <div class="quantity w-5 h-5 text-center text-sm text-white font-semibold bg-green-500 absolute -top-1 -right-2 rounded-full">
                                <?php if(!empty($_SESSION['cart'])) { ?>
                                    <?php echo number_cart_product(); ?>
                                <?php }else { ?>
                                    <?php echo '0'?>
                                <?php } ?>
                            </div>

                            <?php if(empty($_SESSION['cart'])) { ?>
                                <div class="hidden group-hover:block p-5 w-[388px] text-center top-full right-[-30px] absolute shadow-lg z-10">
                                    <p class="text-lg text-[#7e7e7e]">No products in the cart</p>
                                </div>
                            <?php } ?>
                        </li>

                        <li class="group mx-3 text-3xl relative">
                            <a href="#"><i class='bx bx-user'></i></a>
                            <?php if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION["role"] == "admin") { ?>
                                <ul class="w-52 bg-white absolute hidden group-hover:block text-base top-full right-0 text-center border shadow-md rounded
                                     text-green-500 font-semibold z-10">
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="#"><?php echo $_SESSION['email'] ?></a></li>                               
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="admin/index.php">Admin</li>                               
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="logout.php">Log out</a></li>
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="order.php">My order</a></li>
                                </ul>
                            <?php } else if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == "user") { ?>
                                <ul class="w-52 bg-white absolute hidden group-hover:block text-base top-full right-0 text-center border shadow-md rounded
                                     text-green-500 font-semibold z-10">
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="#"><?php echo $_SESSION['email'] ?></a></li>  
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="logout.php">Log out</a></li>
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="order.php">My order</a></li>
                                </ul>
                            <?php } else { ?>
                                <ul class="w-52 bg-white absolute hidden group-hover:block text-base top-full right-0 text-center border shadow-md rounded
                                     text-green-500 font-semibold z-10">
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="login.php">Log in</a></li>  
                                    <li class="hover:bg-yellow-400 hover:text-white p-3 border-b cursor-pointer"><a href="register.php">Register</a></li>
                                </ul>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ===Navigation=== -->
    <div class="hidden md:block md:py-[15px] border-b">
        <div class="md:mx-[15px] flex items-center justify-between relative">
            <div class="group py-3">
                <div class=" flex items-center justify-center gap-x-2 bg-[#29a56c] w-auto py-2 px-5 rounded-md text-white font-semibold">
                    <i class='bx bx-category-alt'></i>
                    <a href="#">Browse All Categories</a>
                    <i class='bx bxs-chevron-down'></i>
                </div>

                <div class="group-hover:block hidden max-w-[500px] absolute top-14 left-0 p-6 bg-white border shadow rounded-lg z-30">
                    <ul class="w-auto grid gap-4 grid-cols-2 grid-rows-2 z-30">
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Wines & Drinks</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Vegetables</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Uncategorized</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Milk and Dairies</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Fresh Seafood</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Fresh Fruit</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Deals Of the day</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Clothing & beauty</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Bread and juice</a>
                        </li>
                        <li class="py-2 px-5 text-center text-[#253d4e] font-semibold border-2 border-green-500 hover:text-yellow-500 rounded-md">
                            <a href="#">Baking material</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="ml-7">
                <span class="text-green-500"><i class='bx bxs-hot'></i></span>
                <span class="font-semibold"><a href="#">Hot Deals</a></span>
            </div>

            <div class="px-5">
                <ul class="flex">
                    <li class="group mx-4 py-5 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#">Home<i class='bx bx-chevron-down'></i></a>
                        </span>

                        <ul class="w-64 h-auto p-5 hidden group-hover:block bg-white absolute top-full z-10 rounded-lg shadow-md">
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home1</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home2</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home3</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home4</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home5</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home6</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home7</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home8</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Home9</a></li>
                        </ul>
                    </li>
                    <li class="mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#">About</a>
                        </span>

                    </li>
                    <li class="group mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="shop.php">Shop<i class='bx bx-chevron-down'></i></a>
                        </span>

                        <div class="w-full h-auto p-4 hidden group-hover:flex justify-between top-full left-0 right-0 bg-white absolute z-20 rounded-lg shadow-md">
                            <div>
                                <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Style</h3>
                                <ul>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style one</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style two</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style three</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style four</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Load More</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Infinite Scrolling</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop Wide</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop With Left Sidebar</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop With Right Sidebar</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop List Left Sidebar</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop List Right Sidebar</a></li>
                                </ul>
                            </div>
                            <div>
                                <div>
                                    <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Single Style</h3>
                                    <ul>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style one</a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style two</a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style three</a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style four</a></li>
                                    </ul>
                                </div>
                                <div class="mt-5">
                                    <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Single Features</h3>
                                    <ul>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With Details Date</a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With Message Box</a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With Video Style One</a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With Video Style Two </a></li>
                                        <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With Advertisement </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Types</h3>
                                <ul>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Simple product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Grouped product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">External/Affiliate product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Variable product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Frequently Bought Together</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With No Sidebar</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product With Left Sidebar</a></li>
                                </ul>
                            </div>
                            <div class="w-80 h-auto bg-white relative rounded-xl overflow-hidden">
                                <div class="w-full h-full">
                                    <img class="w-full h-full object-cover" src="public/img/banner/banner-14-min.png" alt="">
                                </div>
                                <div class="absolute top-24 left-5 right-5">
                                    <span class="my-5 text-[#3bb77e] font-semibold">Oganic</span>
                                    <h1 class="my-5 text-2xl">Everyday Fresh & Clean with our product</h1>
                                    <button class="my-5 px-4 py-1 bg-[#29a56c] text-white font-semibold rounded-md
                                            hover:text-[#253d4e] hover:bg-yellow-500 transition duration-300 ease-in">
                                        <a href="#">Shop now</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="group mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#">Vendors<i class='bx bx-chevron-down'></i></a>
                        </span>

                        <ul class="w-64 h-auto p-5 hidden group-hover:block bg-white absolute top-full z-10 rounded-lg shadow-md">
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Dashboard</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Stire Listing</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Store Details</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">My Orders</a></li>
                        </ul>
                    </li>

                    <li class="group mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#"> Menu<i class='bx bx-chevron-down'></i></a>
                        </span>

                        <div class="w-full h-auto p-4 hidden group-hover:flex justify-between top-full left-0 right-0 bg-white absolute z-20 rounded-lg shadow-md">
                            <div>
                                <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Style</h3>
                                <ul>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style one</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style two</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style three</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style four</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Load More</a></li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Style</h3>
                                <ul>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style one</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style two</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style three</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Style four</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Product Load More</a></li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-2xl text-[#3bb77e] font-semibold">Product Types</h3>
                                <ul>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Simple product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Grouped product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">External/Affiliate product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Variable product</a></li>
                                    <li class="my-3 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Frequently Bought Together</a></li>
                                </ul>
                            </div>

                            <div class="w-80 h-auto bg-white relative rounded-xl overflow-hidden">
                                <div class="w-full h-full">
                                    <img class="w-full h-full object-cover" src="public/img/banner/banner-14-min.png" alt="">
                                </div>
                                <div class="absolute bottom-0 left-5 right-5">
                                    <span class="my-5 text-[#3bb77e] font-semibold">Oganic</span>
                                    <h1 class="my-5 text-[#25404f] text-2xl font-semibold">Everyday Fresh & Clean with our product</h1>
                                    <button class="my-5 px-4 py-1 bg-[#29a56c] text-white font-semibold rounded-md
                                            hover:text-[#253d4e] hover:bg-yellow-500 transition duration-300 ease-in">
                                        <a href="#">Shop now</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="group mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#">Blog<i class='bx bx-chevron-down'></i></a>
                        </span>

                        <ul class="w-64 h-auto p-5 hidden group-hover:block bg-white absolute top-full z-10 rounded-lg shadow-md">
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Blog Default</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Blog Grid</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Blog List</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Blog Big</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Blog Wide</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Single Blog</a></li>
                        </ul>
                    </li>

                    <li class="group mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#">Pages<i class='bx bx-chevron-down'></i></a>
                        </span>

                        <ul class="w-64 h-auto p-5 hidden group-hover:block bg-white absolute top-full right-8 z-10 rounded-lg shadow-md">
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">About Us</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Contact</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">My account</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop cart</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop Compare</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Shop Wishlist</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Checkout</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Privacy Policy</a></li>
                            <li class="my-4 hover:text-[#3bb77e] text-[#7e7e7e] font-semibold"><a href="#">Refun and Returns Policy</a></li>
                        </ul>
                    </li>

                    <li class="mx-4 flex items-center">
                        <span class="text-[#253d4e] font-semibold hover:text-[#3bb77e] transition duration-200 ease-linear">
                            <a href="#">Contact</a>
                        </span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>