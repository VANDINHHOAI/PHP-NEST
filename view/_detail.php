<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="public/img/Logo/logo-tap.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    .tab-btn.active {
        color: #3bb77e;
    }

    .tab-content.active {
        display: block;
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
                        <li class="ml-1 hover:text-red-500"><a href="#">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content section -->
        <?php foreach ($productList as $product) { ?>
            <?php if ($product['id'] == $_GET["id"]) { ?>
                <div class="block md:flex w-full md:px-20">
                    <div class="w-full md:w-3/4 h-auto bg-white pt-10 md:pt-20 md:pl-[15px] md:pr-[45px] pb-[50px]">
                        <div class="md:flex">
                            <div class="w-full md:w-[40%] bg-white h-auto md:px-3">
                                <div class="flex items-center justify-center rounded-2xl border overflow-hidden">
                                    <div class="slider-show" id="product-image">
                                        <img src="public/img/Products/<?php echo $product['image'] . ".jpg" ?>" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-[60%] bg-white h-auto md:px-3 mt-5 md:mt-0">
                                <div class="md:px-[30px]">
                                    <span class="bg-[#fde0e9] text-[#3bb77e] font-semibold px-3 py-1 rounded-md">Sale!</span>
                                    <h1 id="product-name" class="mt-5 text-[#253d4e] text-2xl md:text-[38px] font-semibold"><?php echo $product['name']; ?></h1>
                                    <div class="py-[15px] text-yellow-500">
                                        <div class="flex items-center">
                                            <div class="flex items-center">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                                <i class='bx bx-star'></i>
                                            </div>
                                            <a href="#" class="text-[#3bb77e] ml-1"><span>(1 customer review)</span></a>
                                        </div>
                                    </div>
                                    <div>
                                        <span id="price_old" class="text-lg text-green-300 line-through"><?php echo $product['price']; ?></span>
                                        <span id="product-price" class="text-xl font-semibold text-[#3bb77e] underline">$22.85</span>
                                    </div>
                                    <p class="mt-5 mb-5 text-[#7e7e7e]"><?php echo $product['description']; ?></p>
                                    <span class="text-[#b3af54]">26 in stock</span>

                                    <form action="cart.php" method="post" class="flex items-center mt-5">
                                        <input type="hidden" name="_method" value="create">
                                        <div class="inline-block px-2 border-2 border-[#3bb77e] rounded-md overflow-hidden">
                                            <div class="flex items-center ">
                                                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                                                <input type="hidden" name="productName" value="<?php echo $product['name']; ?>">
                                                <input type="hidden" name="productImage" value="<?php echo $product['image']; ?>.jpg">
                                                <input type="hidden" name="productPrice" value="<?php echo $product['price']; ?>">
                                                <input type="text" name="quantity" class="w-12 h-auto outline-none border-none text-center text-[#3bb77e] font-semibold" id="inputField" value="1">
                                                <div class="flex flex-col text-lg text-[#3bb77e] font-semibold">
                                                    <button id="increaseBtn"><i class='bx bx-chevron-up'></i></button>
                                                    <button id="decreaseBtn"><i class='bx bx-chevron-down'></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="bg-[#3bb77e] text-white font-semibold px-5 py-4 ml-1 border-2 border-[#3bb77e] hover:bg-yellow-500 rounded-md
                                        hover:border-yellow-500 transition duration-300 ease-in">
                                            Add to cart
                                        </button>
                                    </form>

                                    <div class="mt-5 md:flex items-center gap-x-1">
                                        <button class="text-[#253d4e] font-semibold border rounded-md px-5 py-3">Compare</button>
                                        <button class="text-[#253d4e] font-semibold border rounded-md px-5 py-3 mt-2 md:mt-0">Add to wishlist</button>
                                    </div>

                                    <div class="flex items-center gap-x-8 mt-5 text-[#7e7e7e]">
                                        <div class="w-[25%]">
                                            <p>Type: <span class="text-[#3bb77e]">Organic</span></p>
                                            <p>MFG:<span class="text-[#3bb77e]">Jun 4.2021</span></p>

                                            <p>LIFE: <span class="text-[#3bb77e]">70 days</span></p>
                                        </div>
                                        <div class="w-[75%]">
                                            <p>SKU: <span class="text-[#3bb77e]">JFFDW11</span></p>
                                            <p>Category:<span class="text-[#3bb77e]">Baking material, Deals Of The Day, Fresh Fruit</span></p>

                                            <p>Tag:<span class="text-[#3bb77e]">Brown, Hodo Foods, Organic</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:px-[50px] md:py-10 md:border rounded-2xl mt-10">
                            <div class="flex text-center gap-x-2">
                                <button class="tab-btn active px-5 py-1 md:px-7 md:py-2 md:text-lg text-[#7e7e7e] font-semibold shadow rounded-full transition duration-200 ease-in" onclick="openTab('tab1')">Description</button>
                                <button class="tab-btn px-5 py-1 md:px-7 md:py-2 md:text-lg text-[#7e7e7e] font-semibold shadow rounded-full ml-1 transition duration-200 ease-in" onclick="openTab('tab2')">Review(1)</button>
                            </div>
                            <div id="tab1" class="tab-content active text-[#7e7e7e] md:p-[10px] mt-5">
                                <div class="mb-10">
                                    <p>Uninhibited carnally hired played in whimpered dear gorilla
                                        koala depending and much yikes off far quetzal goodness and
                                        from for grimaced goodness unaccountably and meadowlark near
                                        unblushingly crucial scallop tightly neurotic hungrily some and
                                        dear furiously this apart.
                                    </p>
                                </div>
                                <div class="mb-10">
                                    <p>Uninhibited carnally hired played in whimpered dear gorilla
                                        koala depending and much yikes off far quetzal goodness and
                                        from for grimaced goodness unaccountably and meadowlark near
                                        unblushingly crucial scallop tightly neurotic hungrily some and
                                        dear furiously this apart.
                                    </p>
                                </div>
                                <div>
                                    <ul>
                                        <li class="mb-3"><span>.</span><span class="inline-block w-44">Type Of Packing</span>Bottle</li>
                                        <li class="mb-3"><span>.</span><span class="inline-block w-44">Color</span>Green, Pink, Powder Blue, Purple</li>
                                        <li class="mb-3"><span>.</span><span class="inline-block w-44">Quantity Per Case</span>100ml</li>
                                        <li class="mb-3"><span>.</span><span class="inline-block w-44">Ethyl Alcohol</span>70%</li>
                                        <li class="mb-3"><span>.</span><span class="inline-block w-44">Piece In One</span>Carton</li>
                                    </ul>
                                </div>
                                <div class="border mt-10"></div>
                                <div class="mt-10">
                                    <p>
                                        Laconic overheard dear woodchuck wow this outrageously taut beaver
                                        hey hello far meadowlark imitatively egregiously hugged that yikes
                                        minimally unanimous pouted flirtatiously as beaver beheld above
                                        forward energetic across this jeepers beneficently cockily less
                                        a the raucously that magic upheld far so the this where crud then
                                        below after jeez enchanting drunkenly more much wow callously irrespective limpet.
                                    </p>
                                </div>
                                <div class="border mt-10 mb-10"></div>
                                <div class="text-[#253d4e] text-2xl font-semibold">
                                    <h3>Packaging & Delivery</h3>
                                </div>
                                <div class="mb-10 mt-5">
                                    <p>
                                        Laconic overheard dear woodchuck wow this outrageously taut beaver
                                        hey hello far meadowlark imitatively egregiously hugged that yikes
                                        minimally unanimous pouted flirtatiously as beaver beheld above
                                        forward energetic across this jeepers beneficently cockily less
                                        a the raucously that magic upheld far so the this where crud then
                                        below after jeez enchanting drunkenly more much wow callously irrespective limpet.
                                    </p>
                                </div>
                                <div class="mb-10">
                                    <p>
                                        Scallop or far crud plain remarkably far by thus far iguana lewd
                                        precociously and and less rattlesnake contrary caustic wow this
                                        near alas and next and pled the yikes articulate about as less
                                        cackled dalmatian in much less well jeering for the thanks blindly
                                        sentimental whimpered less across objectively fanciful grimaced
                                        wildly some wow and rose jeepers outgrew lugubrious luridly
                                        irrationally attractively dachshund.
                                    </p>
                                </div>
                                <div class="mb-5 text-[#253d4e] text-2xl font-semibold">
                                    <h3>Suggested Use</h3>
                                </div>
                                <div class="flex flex-col gap-y-5">
                                    <a href="#">Refrigeration not necessary.</a>
                                    <a href="#">Stir before serving</a>
                                </div>
                                <div class="text-[#253d4e] text-2xl font-semibold mt-10 mb-5">
                                    <h3>Other Ingredients</h3>
                                </div>
                                <div class="flex flex-col gap-y-5">
                                    <a href="#">Organic raw pecans, organic raw cashews.</a>
                                    <a href="#">This butter was produced using a LTG (Low Temperature Grinding) process</a>
                                    <a href="#">Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</a>
                                </div>
                                <div class="text-[#253d4e] text-2xl font-semibold mt-10 mb-5">
                                    <h3>Warnings</h3>
                                </div>
                                <div><a href="#">Oil separation occurs naturally. May contain pieces of shell.</a></div>
                            </div>

                            <div id="tab2" class="tab-content hidden text-[#7e7e7e] md:p-[10px] mt-5">
                                <div class="mb-10 text-[#253d4e] text-2xl font-semibold">
                                    <h2>1 review for Haagen Caramel Cone Ice Cream Boxed</h2>
                                </div>
                                <div class="md:flex items-center">
                                    <div class="flex items-center justify-center mb-5 md:mb-0"><img class="rounded-full" src="./img/User/client-1.png" alt=""></div>
                                    <div class="w-full p-4 md:ml-2 flex items-center justify-between border">
                                        <p class="">
                                            <strong class="text-[#253d4e] text-lg font-semibold">Barbara Cartland</strong>
                                            <span>-</span>
                                            <span>June 8, 2023</span>
                                        </p>
                                        <div class="flex ml-10 text-yellow-500">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-10 mt-5 text-[#253d4e] text-2xl font-semibold">
                                    <h2>Add a review</h2>
                                </div>
                                <div class="mb-5">
                                    <span>Your email address will not be published. Required fields are marked *</span>
                                </div>
                                <div class="mb-3"><span>Your rating *</span></div>
                                <div class="flex text-[#3bb77e] mb-10">
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <div class="mb-3"><span>Your review *</span></div>
                                <div class="mb-3">
                                    <textarea class="w-full outline-none border p-4 rounded-md" cols="50" rows="10"></textarea>
                                </div>
                                <div><label for="name">Name *</label></div>
                                <div class="mb-3">
                                    <input type="text" id="name" class="w-full outline-none border p-4 rounded-md"></input>
                                </div>
                                <div><label for="email">Email *</label></div>
                                <div class="mb-3">
                                    <input type="email" id="email" class="w-full outline-none border p-4 rounded-md"></input>
                                </div>
                                <div class="mb-3 md:flex items-center gap-x-2">
                                    <input type="checkbox" class="w-5 h-5">
                                    <span> Save my name, email, and website in this browser for the next time I comment.</span>
                                </div>
                                <button type="submit" class="w-full text-white font-semibold bg-[#3bb77e] py-5 rounded-lg hover:bg-yellow-500
                        transition duration-300 ease-in">
                                    Submit
                                </button>
                            </div>
                        </div>

                        <div class="mt-10">
                            <div class="pb-5 text-[#253d4e] text-2xl font-semibold border-b">
                                <h2>Related products</h2>
                            </div>
                            <div class="w-[100px] h-[2px] bg-[#3bb77e]"></div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                                <div class="group mt-5 md:mt-0 border rounded-md hover:border-green-500 hover:shadow hover:scale-[1.01]
                        transition duration-300 ease-in-out cursor-pointer relative">
                                    <div class="w-full px-6 pt-6">
                                        <img src="public/img/Products/product-10.jpg" alt="">
                                    </div>

                                    <div class="px-5 pb-5">
                                        <span class="text-xs text-[#adadad]">Baking material</span>
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Foster Farms Takeout Crispy Classic</a>
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
                                                <span class="text-green-500">$17.85</span>
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

                                <div class="group mt-5 md:mt-0 border rounded-md hover:border-green-500 hover:shadow hover:scale-[1.01]
                        transition duration-300 ease-in-out cursor-pointer relative">
                                    <div class="w-full px-6 pt-6">
                                        <img src="public/img/Products/product-9.jpg" alt="">
                                    </div>

                                    <div class="px-5 pb-5">
                                        <span class="text-xs text-[#adadad]">Baking material</span>
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Foster Farms Takeout Crispy Classic</a>
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
                                                <span class="text-green-500">$17.85</span>
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

                                <div class="group mt-5 md:mt-0 border rounded-md hover:border-green-500 hover:shadow hover:scale-[1.01]
                        transition duration-300 ease-in-out cursor-pointer relative">
                                    <div class="w-full px-6 pt-6">
                                        <img src="public/img/Products/product-8.jpg" alt="">
                                    </div>

                                    <div class="px-5 pb-5">
                                        <span class="text-xs text-[#adadad]">Baking material</span>
                                        <div class="text-[#253d4e] font-semibold hover:text-green-500">
                                            <a href="#">Foster Farms Takeout Crispy Classic</a>
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
                                                <span class="text-green-500">$17.85</span>
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
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <div class="w-full md:w-1/4 h-auto bg-white pt-10 md:pt-20 md:pl-[15px] md:pr-[15px] pb-[30px]">
                <div class="p-[30px] border rounded-2xl shadow-md">
                    <div class="border-b">
                        <h2 class="text-[#253d4e] text-2xl font-semibold mb-7">Category</h2>
                        <div class="w-[100px] h-[2px] bg-[#3bb77e]"></div>
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center gap-2 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                        <div class="flex items-center gap-2 mt-3 py-[9px] pl-[10px] pr-[67px] border rounded relative cursor-pointer">
                            <div class="w-[30px] h-[30px]"><img class="object-cover" src="public/img/icon/icon-f-1.png" alt=""></div>
                            <div class="text-[#253d4e]">Baking material</div>
                            <div class="w-6 h-6 bg-[#bce3c9] text-center text-[#253d4e] rounded-full absolute top-3 right-3">7</div>
                        </div>

                    </div>
                </div>

                <div class="p-[30px] mt-12 border rounded-2xl shadow-md">
                    <div class="border-b">
                        <h2 class="text-[#253d4e] text-2xl font-semibold mb-7">Product Tags</h2>
                        <div class="w-[100px] h-[2px] bg-[#3bb77e]"></div>
                    </div>

                    <div class="flex flex-wrap gap-3 mt-5">
                        <div class="group flex items-center bg-white px-2 py-1 border rounded-full shadow hover:-translate-y-2
                        transition-all duration-300 ease-in-out cursor-pointer">
                            <i class='bx bx-x text-2xl text-[#7e7e7e]'></i>
                            <Span class="text-[#3bb77e] font-semibold group-hover:text-red-500">Brown</Span>
                        </div>

                        <div class="group flex items-center bg-white px-2 py-1 border rounded-full shadow hover:-translate-y-2
                        transition-all duration-300 ease-in-out cursor-pointer">
                            <i class='bx bx-x text-2xl text-[#7e7e7e]'></i>
                            <Span class="text-[#3bb77e] font-semibold group-hover:text-red-500">Coffee</Span>
                        </div>

                        <div class="group flex items-center bg-white px-2 py-1 border rounded-full shadow hover:-translate-y-2
                        transition-all duration-300 ease-in-out cursor-pointer">
                            <i class='bx bx-x text-2xl text-[#7e7e7e]'></i>
                            <Span class="text-[#3bb77e] font-semibold group-hover:text-red-500">Hodo Foods</Span>
                        </div>

                        <div class="group flex items-center bg-white px-2 py-1 border rounded-full shadow hover:-translate-y-2
                        transition-all duration-300 ease-in-out cursor-pointer">
                            <i class='bx bx-x text-2xl text-[#7e7e7e]'></i>
                            <Span class="text-[#3bb77e] font-semibold group-hover:text-red-500">Meats</Span>
                        </div>

                        <div class="group flex items-center bg-white px-2 py-1 border rounded-full shadow hover:-translate-y-2
                        transition-all duration-300 ease-in-out cursor-pointer">
                            <i class='bx bx-x text-2xl text-[#7e7e7e]'></i>
                            <Span class="text-[#3bb77e] font-semibold group-hover:text-red-500">Organic</Span>
                        </div>

                        <div class="group flex items-center bg-white px-2 py-1 border rounded-full shadow hover:-translate-y-2
                        transition-all duration-300 ease-in-out cursor-pointer">
                            <i class='bx bx-x text-2xl text-[#7e7e7e]'></i>
                            <Span class="text-[#3bb77e] font-semibold group-hover:text-red-500">Snack</Span>
                        </div>
                    </div>
                </div>

                <div class="p-[30px] mt-12 border rounded-2xl shadow-md">
                    <div class="border-b">
                        <h2 class="text-[#253d4e] text-2xl font-semibold mb-7">Products</h2>
                        <div class="w-[100px] h-[2px] bg-[#3bb77e]"></div>
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center mt-3 gap-2 py-[9px] px-3 rounded cursor-pointer">
                            <div class="w-[50px] h-[50px]"><img class="w-full h-full object-cover" src="public/img/Products/product-1.jpg" alt=""></div>
                            <div>
                                <div class="text-[#253d4e] font-semibold"><a href="#">Organic Cage Grade A Large Eggs</a></div>
                                <div class="mt-2">
                                    <span class="text-[#7e7e7e] text-sm line-through">$24.00</span>
                                    <span class="text-[#3bb77e] font-bold">$21.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mt-3 gap-2 py-[9px] px-3 rounded cursor-pointer">
                            <div class="w-[50px] h-[50px]"><img class="w-full h-full object-cover" src="public/img/Products/product-2.jpg" alt=""></div>
                            <div>
                                <div class="text-[#253d4e] font-semibold"><a href="#">Organic Cage Grade A Large Eggs</a></div>
                                <div class="mt-2">
                                    <span class="text-[#7e7e7e] text-sm line-through">$24.00</span>
                                    <span class="text-[#3bb77e] font-bold">$21.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mt-3 gap-2 py-[9px] px-3 rounded cursor-pointer">
                            <div class="w-[50px] h-[50px]"><img class="w-full h-full object-cover" src="public/img/Products/product-3.jpg" alt=""></div>
                            <div>
                                <div class="text-[#253d4e] font-semibold"><a href="#">Organic Cage Grade A Large Eggs</a></div>
                                <div class="mt-2">
                                    <span class="text-[#7e7e7e] text-sm line-through">$24.00</span>
                                    <span class="text-[#3bb77e] font-bold">$21.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mt-3 gap-2 py-[9px] px-3 rounded cursor-pointer">
                            <div class="w-[50px] h-[50px]"><img class="w-full h-full object-cover" src="public/img/Products/product-4.jpg" alt=""></div>
                            <div>
                                <div class="text-[#253d4e] font-semibold"><a href="#">Organic Cage Grade A Large Eggs</a></div>
                                <div class="mt-2">
                                    <span class="text-[#7e7e7e] text-sm line-through">$24.00</span>
                                    <span class="text-[#3bb77e] font-bold">$21.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center mt-3 gap-2 py-[9px] px-3 rounded cursor-pointer">
                            <div class="w-[50px] h-[50px]"><img class="w-full h-full object-cover" src="public/img/Products/product-5.jpg" alt=""></div>
                            <div>
                                <div class="text-[#253d4e] font-semibold"><a href="#">Organic Cage Grade A Large Eggs</a></div>
                                <div class="mt-2">
                                    <span class="text-[#7e7e7e] text-sm line-through">$24.00</span>
                                    <span class="text-[#3bb77e] font-bold">$21.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full h-auto relative mt-12">
                    <div>
                        <img class="object-cover rounded-2xl" src="public/img/banner/banner-11-min.png" alt="">
                    </div>
                    <div class="absolute top-16 left-0 px-8">
                        <span class="text-[#7e7e7e]">Organic</span>
                        <h1 class="text-2xl text-[#253d4e] font-semibold">SAVE 17% on <span class="text-[#3bb77e]">Organic</span> Juice</h1>
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

    <script src="public/js/detail.js"></script>
</body>

</html>