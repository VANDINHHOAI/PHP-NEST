<!-- CART  -->
<?php if(!empty($_SESSION['cart'])) { ?>
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
                                <div class="price mt-3">$<?php echo $item['productPrice']; ?></div>
                                <div class="flex items-center mt-3 gap-x-3">
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="_method" value="update">
                                        <input type="hidden" name="value" value="-1">
                                        <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                                        <button type="submit" class="w-6 h-6 border hover:bg-[#3bb77e] rounded-full"><i class='bx bx-chevron-left'></i></button>
                                    </form>

                                    <span class="quantity text-[#3bb77e] font-semibold"><?php echo $item['quantity']; ?></span>

                                    <form action="index.php" method="post">
                                        <input type="hidden" name="_method" value="update">
                                        <input type="hidden" name="value" value="1">
                                        <input type="hidden" name="productId" value="<?php echo $item['productId']; ?>">
                                        <button type="submit" class="w-6 h-6 border hover:bg-[#3bb77e] rounded-full"><i class='bx bx-chevron-right'></i></button>
                                    </form>
                                </div>
                            </div>

                            <form action="index.php" method="post">
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