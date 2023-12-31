<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Nest</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="public/img/Logo/logo-tap.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .cart.cart-active {
        right: 0;
        transition: .5s;
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
    <div class="w-full">
        <!-- ===================HEADER=================== -->
        <?php include_once './view/inc/_header.php' ?>

        <!-- ===================CART===================  -->
        <!-- CART  -->
        <?php if (!empty($_SESSION['cart'])) { ?>
            <div class="cart hidden md:block fixed top-0 -right-full w-96 h-screen p-5 overflow-y-auto overflow-x-hidden bg-white z-50 shadow" style="transition: .7s;">
                <div class="cart-title text-center text-3xl font-semibold text-[#253D76] mt-8">Your cart</div>
                <!-- CONTENT -->
                <div class="cart-content">
                    <div class="list-cart overflow-hidden mt-5">
                        <?php if (!empty($_SESSION['cart'])) { ?>
                            <?php foreach ($_SESSION['cart'] as $item) { ?>
                                <div class="flex items-center gap-x-5 p-2">
                                    <div class="img w-20 h-20"><img src="public/img/Products/<?php echo $item['productImage']; ?>" alt="product"></div>
                                    <div class="info text-[#253d4e]">
                                        <div class="product-name font-semibold"><?php echo $item['productName'] ?></div>
                                        <div class="price mt-3">$<?php echo $item['productPrice'] ?></div>
                                        <div class="flex items-center mt-3 gap-x-3">
                                            <button class="w-6 h-6 border hover:bg-green-500 rounded-full"><i class='bx bx-chevron-left'></i></button>
                                            <span class="quantity">1</span>
                                            <button class="w-6 h-6 border hover:bg-green-500 rounded-full"><i class='bx bx-chevron-right'></i></button>
                                        </div>
                                    </div>

                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                                        <div class="text-xl text-red-500">
                                            <button><i class='bx bx-trash'></i></button>
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>

                <!-- TOTAL -->
                <div class="total flex items-center justify-end mt-5 gap-x-3 font-semibold border-t">
                    <div class="total-title text-lg text-[#7e7e7e]">Total:</div>
                    <div class="total-price text-base text-[#3bb77e] font-semibold">$<?php echo total_cart(); ?></div>
                </div>
                <!-- View cart and Check out Button -->
                <div class="flex items-center justify-around mt-8 text-lg">
                    <button type="button" class="view-cart-btn text-white bg-[#3BB77E] py-2 px-4 rounded
                    hover:bg-yellow-500 transition duration-300"><a href="cart.php">View cart</a></button>
                    <button type="button" class="check-out-btn text-white bg-[#3BB77E] py-2 px-4 rounded
                    hover:bg-yellow-500 transition duration-300"><a href="check_out.php">Checkout</a></button>
                </div>
                <!-- CART CLOSE -->
                <button class="absolute top-5 right-5 text-4xl hover:rotate-180 hover:text-red-500 transition duration-500"><i class='bx bx-x' id="cart-close"></i></button>
            </div>
        <?php } ?>

        <!-- ===================BREADCRUMB=================== -->
        <div>
            <div class="py-5 border-b">
                <div class="px-[15px] text-green-500">
                    <ul class="flex items-center">
                        <li class=" hover:text-red-500">
                            <a class="flex items-center gap-x-1" href="index.php">
                                <i class='bx bx-home-alt'></i>
                                Home
                                <i class='bx bx-chevron-right'></i>
                            </a>
                        </li>
                        <li class="ml-1 text-[#7e7e7e]"><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content-section -->
        <!-- container -->
        <div class="md:px-[10px]">
            <div class="w-full">
                <div class="py-20 md:px-20 mt-10 rounded-2xl" style="background: url(public/img/banner/banner-10-min.png);">
                    <div class="flex items-center justify-between">
                        <h1 class="w-full md:w-auto text-center text-5xl text-[#253d4e] font-semibold">Shop Cart</h1>
                        <ul class="hidden md:flex flex-wrap items-center text-lg text-[#3bb77e] font-semibold ml-20 gap-x-7">
                            <li class="bg-white px-5 py-2 shadow-md rounded-full hover:text-red-500 transition duration-300"><a href="#">Breakfast</a></li>
                            <li class="bg-white px-5 py-2 shadow-md rounded-full hover:text-red-500 transition duration-300"><a href="#">Dairy Free</a></li>
                            <li class="bg-white px-5 py-2 shadow-md rounded-full hover:text-red-500 transition duration-300"><a href="#">Dessert</a></li>
                            <li class="bg-white px-5 py-2 shadow-md rounded-full hover:text-red-500 transition duration-300"><a href="#">Gluten Free</a></li>
                            <li class="bg-white px-5 py-2 shadow-md rounded-full hover:text-red-500 transition duration-300"><a href="#">Salad</a></li>
                            <li class="bg-white px-5 py-2 shadow-md rounded-full hover:text-red-500 transition duration-300"><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>
                </div>

                <div class="py-20">
                    <div class="px-3">
                        <div>
                            <div class="md:px-24">
                                <div class="hidden md:flex items-center justify-around text-xl text-[#253d4e] font-semibold bg-[#f4f6fa] py-4 rounded-3xl">
                                    <div class="">
                                        <span>Product</span>
                                    </div>
                                    <div class="flex items-center gap-x-20">
                                        <span>Price</span>
                                        <span>Quantity</span>
                                        <span>Subtotal</span>
                                    </div>
                                </div>

                                <?php foreach ($cart as $item) : ?>
                                    <div class="bg-[#f4f6fa] md:bg-white md:flex items-center justify-around p-5">
                                        <div class="md:w-1/2 md:flex items-center gap-x-8">
                                            <form action="cart.php" method="post" class="p-2 md:p-0">
                                                <input type="hidden" name="_method" value="delete">
                                                <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                                                <button class="w-8 h-8 text-red-500 hover:bg-[#3bb77e] hover:text-white border border-[#3bb77e] rounded-full transition">
                                                    <i class='bx bx-x'></i>
                                                </button>
                                            </form>

                                            <div class="w-full md:w-auto border-t md:border-none p-2 md:p-0">
                                                <img class="w-20 h-20" src="public/img/Products/<?php echo $item['productImage']; ?>" alt="">
                                            </div>

                                            <div class="p-2 md:p-0 border-t md:border-none font-semibold">
                                                <h1 class="md:hidden text-[#253d4e] text-lg">Product</h1>
                                                <span class="text-[#3bb77e]"><a href="#"><?php echo $item['productName']; ?></a></span>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 md:flex items-center text-[#7e7e7e]">

                                            <div class="p-2 md:p-0 border-t md:border-none">
                                                <h1 class="md:hidden text-[#253d4e] text-lg font-semibold">Price</h1>
                                                <span class="md:ml-9">$<?php echo $item['productPrice']; ?></span>
                                            </div>

                                            <div class="p-2 md:p-0 border-t md:border-none">
                                                <h1 class="md:hidden text-[#253d4e] text-lg font-semibold">Quantity</h1>
                                                <div class="bg-white inline-block px-2 md:ml-[78px] border-2 border-[#3bb77e] rounded-md overflow-hidden">                                                   
                                                        <div class="flex items-center ">
                                                            <input name="quantityUpdate" type="text" class="w-12 h-auto outline-none border-none text-center text-[#3bb77e] font-semibold" id="inputField" value="<?php echo $item['quantity']; ?>">
                                                            <div class="flex flex-col text-lg text-[#3bb77e] font-semibold">
                                                                <form action="cart.php" method="post">
                                                                    <input type="hidden" name="_method" value="update">
                                                                    <input type="hidden" name="value" value="1">
                                                                    <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                                                                    <button type="submit" id="increaseBtn"><i class='bx bx-chevron-up'></i></button>
                                                                </form>

                                                                <form action="cart.php" method="post">
                                                                    <input type="hidden" name="_method" value="update">
                                                                    <input type="hidden" name="value" value="-1">
                                                                    <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                                                                    <button type="submit" id="decreaseBtn"><i class='bx bx-chevron-down'></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="p-2 md:p-0 border-t md:border-none">
                                                <h1 class="md:hidden text-[#253d4e] text-lg font-semibold">Subtotal</h1>
                                                <span class="md:ml-[70px]">$<?php echo $item['productPrice'] *  $item['quantity']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                                <div class="md:flex items-center justify-between bg-[#f4f6fa] md:bg-white mt-3 md:mt-0 px-5 py-[15px] border-t border-b">
                                    <div class="md:flex items-center gap-x-2">
                                        <input class="w-full md:w-auto px-[15px] py-[10px] border outline-none rounded" type="text" placeholder="Coupon code">
                                        <button class="w-full md:w-auto mt-2 md:mt-0 px-5 py-[10px] bg-[#3bb77e] hover:bg-yellow-500 text-white font-semibold rounded transition duration-300">Apply coupon</button>
                                    </div>
                                    <div><button class="w-full md:w-auto mt-2 md:mt-0 px-5 py-[10px] bg-[#3bb77e] hover:bg-yellow-500 text-white font-semibold rounded transition duration-300">Uppdate cart</button></div>
                                </div>

                                <?php if (!empty($_SESSION['cart'])) { ?>
                                    <div class="w-full flex justify-end mt-5">
                                        <div class="w-full md:w-1/2 text-left">
                                            <h1 class="text-2xl text-[#253d4e] font-semibold">Cart totals</h1>

                                            <div class="md:hidden">
                                                <div class="bg-[#f4f6fa] p-5">
                                                    <div class="p-2 border">
                                                        <h2 class="text-[#253d4e] font-semibold">Subtotal:</h2>
                                                        <span class="text-[#3bb77e]">
                                                            <?php if (!empty($_SESSION['cart'])) { ?>
                                                                <?php echo total_cart(); ?>
                                                            <?php } else { ?>
                                                                <?php echo '0'; ?>
                                                            <?php } ?>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="bg-[#f4f6fa] p-5 mt-3">
                                                    <div class="p-2 border">
                                                        <h2 class="text-[#253d4e] font-semibold">Shipping:</h2>
                                                        <span class="text-[#7e7e7e]">Flat rate</span>
                                                        <span class="text-[#7e7e7e]">Shipping to CA.</span>
                                                        <span class="text-[#3bb77e]">Change address</span>
                                                    </div>
                                                </div>

                                                <div class="bg-[#f4f6fa] p-5 mt-3">
                                                    <div class="p-2 border">
                                                        <h2 class="text-[#253d4e] font-semibold">Total:</h2>
                                                        <span class="text-[#3bb77e]">$<?php echo total_cart(); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="hidden md:block w-full border mt-5">
                                                <tr class="border-b">
                                                    <th class="p-5 border-r text-lg text-[#253d4e] font-medium">Subtotal</th>
                                                    <th class="p-5 text-[#3bb77e] font-medium">$<?php echo total_cart(); ?></th>
                                                </tr>

                                                <tr class="border-b">
                                                    <th class="p-5 border-r text-lg text-[#253d4e] font-medium">Shipping</th>
                                                    <th class="p-5">
                                                        <ul>
                                                            <li class="text-[#7e7e7e] font-medium"><span>Flat rate</span></li>
                                                            <li class="my-3 text-[#7e7e7e] font-medium"><span>Shipping to CA.</span></li>
                                                            <li class="text-[#3bb77e] font-medium"><span>Change address</span></li>
                                                        </ul>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th class="p-5 border-r text-lg text-[#253d4e] font-medium">Total</th>
                                                    <th class="p-5 text-[#3bb77e] font-medium">$<?php echo total_cart(); ?></th>
                                                </tr>
                                            </table>

                                            <div><button class="w-full md:w-auto mt-2 md:mt-5 px-5 py-[10px] bg-[#3bb77e] hover:bg-yellow-500 text-white font-semibold rounded transition duration-300"><a href="check_out.php">Proceed to checkout</a></button></div>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-dashed border-2 rounded-md">
                    <div class="text-2xl text-[#253d4e]">Recently Viewd Products</div>
                    <div class="group p-[15px] inline-block mt-3 border-dashed border-2 rounded-md">
                        <div class="group-hover:-translate-y-2 flex items-center transition duration-300 ease-in-out">
                            <div class="w-20 h-20"><img src="public/img/Products/product-1.jpg" alt=""></div>
                            <div>
                                <h2 class="text-[#253d4e] text-base font-semibold hover:text-[#3bb77e]"><a href="#">Haagen Caramel Cone Ice Cream Boxed</a></h2>
                                <div class="text-yellow-500 flex items-center mt-3 gap-x-2">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>1</span>
                                </div>
                                <div>
                                    <span class="text-[#3bb77e] text-lg font-bold underline">$22.85</span>
                                    <span class="text-[#7e7e7e] text-sm font-semibold line-through">$24.80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================Footer=================== -->
        <?php include_once './view/inc/_footer.php' ?>

        <!-- ===================Button roll to top==================== -->
        <button id="toTop" class="w-12 h-12 bg-white border-2 border-[#253d4e] rounded-full fixed bottom-24 md:bottom-16 right-7
        hover:-translate-y-2 hover:text-red-500 transition duration-300 ease-in-out">
            <i class='bx bx-up-arrow-alt'></i>
        </button>
    </div>

</body>
<script>
    /* button scroll to top design */
    let toTop = document.getElementById('toTop');
    toTop.style.display = 'none';
    window.addEventListener('scroll', () => {
        if (this.scrollY > 300) {
            toTop.style.display = 'block';
        } else {
            toTop.style.display = 'none';
        }
    })
    toTop.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Shopping cart and Checkout
    // OPEN & CLOSE CART
    const cartIcon = document.querySelector('#cart-icon');
    const cart = document.querySelector('.cart');
    const closeCart = document.querySelector("#cart-close");

    closeCart.addEventListener("click", () => {
        cart.classList.remove('cart-active');
    });

    if (cartIcon) {
        cartIcon.addEventListener('click', () => {
            cart.classList.add("cart-active");
        })
    };
</script>

</html>