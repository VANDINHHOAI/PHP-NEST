<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out - Nest</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./img/Logo/logo-tap.png" type="image/x-icon">
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
        <!-- ====================Header==================== -->
        <?php include_once './view/inc/_header.php' ?>

        <!-- Breadcrumb-section -->
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
                        <li class="ml-1 text-[#7e7e7e]"><span>Check out</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ====================CART====================  -->
        <?php if (!empty($_SESSION['cart'])) { ?>
            <div class="cart hidden md:block fixed top-0 -right-full w-96 h-screen p-5 overflow-y-auto overflow-x-hidden bg-white z-50 shadow" style="transition: .7s;">
                <div class="cart-title text-center text-3xl font-semibold text-[#253D76] mt-8">Your cart</div>
                <!-- CONTENT -->
                <div class="cart-content">
                    <div class="list-cart overflow-hidden mt-5">
                        <?php if (!empty($_SESSION['cart'])) { ?>
                            <?php foreach ($_SESSION['cart'] as $item) { ?>
                                <div class="flex items-center gap-x-5 p-2">
                                    <div class="img w-20 h-20"><img src="./img/Products/<?php echo $item['productImage']; ?>" alt="product"></div>
                                    <div class="info text-[#253d4e]">
                                        <div class="product-name font-semibold"><?php echo $item['productName'] ?></div>
                                        <div class="price mt-3">$<?php echo $item['productPrice'] ?></div>
                                        <div class="flex items-center mt-3 gap-x-3">
                                            <button class="w-6 h-6 border hover:bg-green-500 rounded-full"><i class='bx bx-chevron-left'></i></button>
                                            <span class="quantity">1</span>
                                            <button class="w-6 h-6 border hover:bg-green-500 rounded-full"><i class='bx bx-chevron-right'></i></button>
                                        </div>
                                    </div>

                                    <form action="check_out.php" method="post">
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

        <!-- Content-section -->
        <!-- container -->
        <div class="md:px-[10px]">
            <div class="w-full">
                <form action="check_out.php" method="post" class="w-full md:flex mt-10">
                    <div class="w-full md:w-2/3 h-auto text-[#253d4e] font-semibold bg-white px-[15px]">
                        <div class="text-2xl mb-[30px]">
                            <h2>BILLING DETAILS</h2>
                        </div>
                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="first_name">First name</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" name="firstName" id="first_name">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="last_name">Last name</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" name="lastName" id="last_name">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block" for="company_name">Company name (optional)</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" id="company_name">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="country_region">Country / Region</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" id="country_region" placeholder="Vietnam">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="street">Street address</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" name="address" id="street" placeholder="House number and street name">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block" for="another"></label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" id="another" placeholder="Apartment. suite, unit, etc.">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block" for="postcode">Postcode / ZIP (optional)</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" id="postcode">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="town-city">Town / City</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" id="town-city">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="phone">Phone</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" name="phone" id="phone">
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block after:content-['*'] after:text-red-500 after:ml-0.5" for="email">Email address</label>
                            <input class="w-full mt-5 border-none text-sm outline-none" type="text" name="email" id="email">
                        </div>

                        <div class="flex items-center gap-x-5 mb-[30px]">
                            <input type="radio">
                            <span>Create an account?</span>
                        </div>

                        <div class="flex items-center gap-x-5 mb-[30px]">
                            <input type="radio">
                            <span class="font-normal">SHIP TO A DIFFERENT ADDRESS?</span>
                        </div>

                        <div class="py-2 mb-[30px] border-b">
                            <label class="block" for="order_notes">Order notes (optional)</label>
                            <input class="w-full mt-5 border-none text-sm outline-none placeholder:text-xs" type="text" id="order_notes" placeholder="Notes about your order, e, g. special notes for delivery">
                        </div>
                    </div>

                    <div class="w-full md:w-1/3">
                        <div class="w-full h-auto bg-white border border-[#3bb77e]">
                            <div class="px-5 md:px-10 py-[30px]">
                                <div>
                                    <div class="text-[#253d4e] font-semibold">
                                        <h1>PRODUCT</h1>
                                    </div>

                                    <?php if (!empty($_SESSION['cart'])) { ?>
                                        <?php foreach ($_SESSION['cart'] as $item) { ?>
                                            <?php if (!empty($_SESSION['cart'])) { ?>
                                                <div class="flex justify-between py-5 border-b">
                                                    <div class="w-16 h-16"><img class="w-full object-cover" src="./img/Products/<?php echo $item['productImage']; ?>" alt="product"></div>
                                                    <div>
                                                        <div class="text-sm md:text-base whitespace-nowrap">
                                                            <h1><?php echo $item['productName']; ?></h1>
                                                        </div>
                                                        <div class="text-xs md:text-base font-semibold"><span>QTY: <?php echo $item['quantity']; ?></span></div>
                                                    </div>
                                                    <div class="text-[#3bb77e] font-semibold"><span>$<?php echo $item['productPrice']; ?></span></div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php if (!empty($_SESSION['cart'])) { ?>
                                        <div class="flex items-center justify-between py-5 border-b">
                                            <div class="text-[#235d4e] font-semibold"><span>SUBTOTAL</span></div>
                                            <div class="text-[#3bb77e]"><span>$<?php echo total_cart(); ?></span></div>
                                        </div>
                                    <?php } ?>

                                    <div class="flex items-center justify-between py-5 border-b">
                                        <div class="text-[#235d4e] font-semibold"><span>SHIPPING</span></div>
                                        <div>
                                            <input type="checkbox">
                                            <span>Flat rate</span>
                                        </div>
                                    </div>

                                    <?php if (!empty($_SESSION['cart'])) { ?>
                                        <div class="flex items-center justify-between py-5 border-b">
                                            <div class="text-[#235d4e] font-semibold"><span>TOTAL</span></div>
                                            <div class="text-xl text-[#3bb77e] font-semibold"><span>$<?php echo total_cart(); ?></span></div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="mt-5 border p-2 md:p-5">
                                    <ul class="flex flex-col gap-3">
                                        <li class="flex items-center gap-x-3">
                                            <input type="checkbox">
                                            <span>Direct bank transfer</span>
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <input type="checkbox">
                                            <span>Check payments</span>
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <input type="checkbox">
                                            <span>Cash on delivery</span>
                                        </li>
                                        <li class="flex items-center justify-between">
                                            <input type="checkbox">
                                            <span class="text-xs md:text-base">PayPal</span>
                                            <div class="w-24"><img src="./img/Apps/payment-method.png" alt=""></div>
                                            <div class="text-xs md:text-base whitespace-nowrap hover:text-[#3bb77e]">
                                                <a href="#">What is PayPal?</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <button class="w-full bg-[#3bb77e] text-white font-semibold py-3 md:py-5 mt-3 hover:bg-yellow-500 transition duration-300">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ===Footer=== -->
            <?php include_once './view/inc/_footer.php' ?>

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