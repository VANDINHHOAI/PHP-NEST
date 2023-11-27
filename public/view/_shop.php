<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./img/Logo/logo-tap.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>

    #toTop:active{
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
    <!-- ===Wraprer=== -->
    <div class="w-full">
        <!-- ===Header=== -->
        <?php include_once './view/inc/_header.php' ?>

        <!-- Breadcrumb-section -->
        <div>
            <div class="py-5 border-b">
                <div class="px-[15px] text-green-500">
                    <ul class="flex items-center">
                        <li class=" hover:text-red-500">
                            <a class="flex items-center gap-x-1" href="index.html">
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
        
        <!-- Content-section -->
        <div>
            <div>
                <div class="block md:flex">
                    <div class="md:w-3/4 bg-white pt-20 pr-0 md:pr-[45px] pl-0 md:pl-[15px] pb-[50px]">
                        <div class="pb-5 md:flex justify-between">
                            <div class="flex items-center justify-between gap-x-5">
                                <div class="flex items-center gap-x-5">
                                    <button class="flex items-center justify-center bg-white w-16 h-7 md:h-auto md:w-auto border md:px-6 md:py-2 text-xs md:text-base 
                                    rounded-full font-semibold shadow hover:bg-[#3bb77e] hover:text-white transition-all duration-200 ease-in-out">
                                        <i class='bx bx-filter-alt'></i>
                                        <span class="duration-500">Filter</span>
                                    </button>
                                    <div class="flex gap-x-1">
                                        <button class="text-xl px-2 py-1 md:px-3 md:py-2 bg-[#3bb77e] text-white rounded-md
                                        hover:text-white hover:bg-[#3bb77e] transition duration-300 ease-in-out">
                                            <i class='bx bx-grid'></i>
                                        </button>

                                        <button class="text-xl px-2 py-1 md:px-3 md:py-2 bg-[#def9ec] text-black rounded-md
                                        hover:text-white hover:bg-[#3bb77e] transition duration-300 ease-in-out">
                                            <i class='bx bx-list-ul' ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-[#7e7e7e]">Show:</span>
                                    <button class="group flex items-center gap-x-2 border px-4 py-2 md:px-5 md:py-3 rounded-xl font-semibold ml-4 relative">
                                        12
                                        <i class='bx bx-chevron-down js-btn-sort'></i>
                                        
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between mt-5 md:mt-0">
                                <span class="text-[#7e7e7e]">Showing all 10 results</span>
                                <button class="flex gap-x-2 border px-2 py-1 md:px-5 md:py-3 rounded-xl font-semibold ml-4">
                                    Default sorting
                                    <i class='bx bx-chevron-down'></i>
                                </button>
                            </div>
                        </div>

                        <div class="md:flex items-center justify-between">
                            <div class="flex items-center overflow-hidden">
                                <button class="group min-w-[150px] md:w-auto flex items-center justify-center gap-x-2 border py-1 md:px-5 md:py-3 rounded-lg font-semibold mr-3">
                                    All Categoies
                                    <i class='bx bx-chevron-down js-btn-sort'></i>
                                </button>

                                <button class="group min-w-[150px] md:w-auto flex items-center justify-center gap-x-2 border py-1 md:px-5 md:py-3 rounded-lg font-semibold mr-3">
                                    All Brands
                                    <i class='bx bx-chevron-down js-btn-sort'></i>
                                </button>

                                <button class="group min-w-[150px] md:w-auto flex items-center justify-center gap-x-2 border py-1 md:px-5 md:py-3 rounded-lg font-semibold mr-3 ">
                                    All Size
                                    <i class='bx bx-chevron-down js-btn-sort'></i>
                                </button>

                                <button class="group min-w-[150px] md:w-auto flex items-center justify-center gap-x-2 border py-1 md:px-5 md:py-3 rounded-lg font-semibold mr-3">
                                    All Weight
                                    <i class='bx bx-chevron-down js-btn-sort'></i>
                                </button>
                            </div>

                            <div class="w-full md:w-auto mt-5 md:mt-0 flex items-center gap-x-5">
                                <div class="bg-[#3bb77e] w-1/2 md:w-auto text-center hover:bg-green-600 text-white py-2 md:px-4 md:py-3 rounded-xl">
                                    <a href="#">Filter</a>
                                </div>
                                <div class="bg-white w-1/2 md:w-auto text-center py-2 md:px-4 md:py-3 border rounded-xl">
                                    <a href="#">Reset Filter</a>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-5 md:gap-6 mt-5">
                            <div class="group mt-5 md:mt-0 border rounded-md hover:border-green-500 hover:shadow hover:scale-[1.01]
                            transition duration-300 ease-in-out cursor-pointer relative">
                                <div class="w-full px-6 pt-6">
                                    <img src="./img/Products/product-10.jpg" alt="">
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
                                    <img src="./img/Products/product-1.jpg" alt="">
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
                                    <img src="./img/Products/product-5.jpg" alt="">
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
                                    <img src="./img/Products/product-7.jpg" alt="">
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
                                    <img src="./img/Products/product-2.jpg" alt="">
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
                                    <img src="./img/Products/product-3.jpg" alt="">
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
                                    <img src="./img/Products/product-4.jpg" alt="">
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
                                    <img src="./img/Products/product-6.jpg" alt="">
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
                                    <img src="./img/Products/product-8.jpg" alt="">
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
                                    <img src="./img/Products/product-9.jpg" alt="">
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
                                    <img src="./img/Products/product-1.jpg" alt="">
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
                                    <img src="./img/Products/product-2.jpg" alt="">
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
                                    <img src="./img/Products/product-3.jpg" alt="">
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
                                    <img src="./img/Products/product-4.jpg" alt="">
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
                                    <img src="./img/Products/product-5.jpg" alt="">
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
                                    <img src="./img/Products/product-6.jpg" alt="">
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

                        <div class="w-full text-[#777777] text-center mt-10"><span>No more Products to load</span></div>
                    </div>
                    <div class="md:w-1/4 bg-white pt-20 px-0 md:px-[15px] pb-[30px] h-auto">
                        <div class="p-[30px] border rounded-2xl shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Filter by price</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div class="price-range flex flex-col">
                                <input type="range" id="priceRange">
                            </div>
                        </div>

                        <div class="p-[30px] border rounded-2xl mt-14 shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Product Categories</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div>
                                <ul>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Baking material7</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Bread and Juice5</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Clothing & beauty2</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Deals Of The Day4</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Fresh Fruit8</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Fresh Seafood5</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Milks and Dairies3</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Vegetables9</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Wines & Drinks1</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Uncategorized9</span></li>
                                </ul>
                            </div>
                            <button class="px-4 py-2 bg-[#3bb77e] mt-4 text-white font-semibold rounded hover:bg-yellow-500 hover:text-black
                            transition duration-500 ease-in-out">Reset</button>
                        </div>

                        <div class="p-[30px] border rounded-2xl mt-14 shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Brands</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div>
                                <ul>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>100% Organic3</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Bio Market3</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Eco Market3</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Family2</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Farmers Market5</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Green Basket2</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Health Store4</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Shop Grocery3</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>The Green3</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>Vegan Market3</span></li>
                                </ul>
                            </div>
                            <button class="px-4 py-2 bg-[#3bb77e] mt-4 text-white font-semibold rounded hover:bg-yellow-500 hover:text-black
                            transition duration-500 ease-in-out">Reset</button>
                        </div>

                        <div class="p-[30px] border rounded-2xl mt-14 shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Filter by attribute</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div>
                                <ul>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>10 (2)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>5 (2)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>6 (2)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>7 (1)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>9 (1)</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-[30px] border rounded-2xl mt-14 shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Filter by attribute</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div>
                                <ul>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>100g (2)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>50g (2)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>60g (2)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>70g (1)</span></li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>90g (1)</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-[30px] border rounded-2xl mt-14 shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Filter by stock status</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div>
                                <ul>
                                    <li class="flex items-center gap-x-2 text-sm mt-4"><input class="w-5 h-5" type="checkbox"><span>In stock (16)</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-[30px] border rounded-2xl mt-14 shadow-lg">
                            <div class="text-2xl pb-5 border-b relative mb-[30px]">
                                <h2>Filter by stock status</h2>
                                <div class="w-[100px] h-[2px] bg-green-500 absolute left-0 bottom-0"></div>
                            </div>

                            <div>
                                <ul>
                                    <li class="flex items-center gap-x-2 text-sm mt-4">
                                        <input class="w-5 h-5" type="checkbox">
                                        <div class="text-[#3bb77e] flex items-center">
                                            <div class="flex items-center">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                    </li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4">
                                        <input class="w-5 h-5" type="checkbox">
                                        <div class="text-[#3bb77e] flex items-center">
                                            <div class="flex items-center">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </div>
                                            <div class="flex items-center text-yellow-500"><i class='bx bxs-star'></i></div>
                                            <span>(2)</span>
                                        </div>
                                    </li>
                                    <li class="flex items-center gap-x-2 text-sm mt-4">
                                        <input class="w-5 h-5" type="checkbox">
                                        <div class="text-[#3bb77e] flex items-center">
                                            <div class="flex items-center">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </div>
                                            <div class="flex items-center text-yellow-500">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                    </li>
                                </ul>
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
    <script src="./Javascript/Shop.js"></script>
</body>
</html>