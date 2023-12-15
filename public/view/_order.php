<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./img/Logo/logo-tap.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Order</title>
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
                        <li class="ml-1 text-[#7e7e7e]"><span>My Order</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content-section -->
        <!-- container -->
        <div class="md:px-[10px]">
            <div class="w-full">
                <div class="py-20 md:px-20 mt-10 rounded-2xl" style="background: url(./img/banner/banner-10-min.png);">
                    <div class="text-center">
                        <h1 class="w-full md:w-auto text-center text-5xl text-[#253d4e] font-semibold">My order</h1>
                    </div>
                </div>
            </div>

            <main class="mb-10">
                <div class="max-w-[73.125rem] m-auto mt-[60px] ">
                    <div class="w-full justify-center items-center text-center">

                        <ul class="w-auto text-center">
                            <li class="mt-2 font-bold text-start text-[#253d4e]">Information :</li>
                            <li class="text-start text-[#7e7e7e]">Email :
                                <span class="text-[#3bb77e] font-semibold"><?php echo $_SESSION['email'] ?></span>
                            </li>
                            <li class="text-start text-[#7e7e7e]">Phone :
                                <?php foreach($order as $itemOrder) { ?>
                                    <span class="text-[#3bb77e] font-semibold">
                                        <?php echo $itemOrder['phone'] . ", "; ?>
                                    </span>
                                <?php } ?>
                            </li>
                            <li class="text-start text-[#7e7e7e]">ID :
                                <span class="text-[#3bb77e] font-semibold">
                                    <?php echo $_SESSION['users_id'];?>
                                </span>
                            </li>
                            <li class="text-start text-[#7e7e7e]">Address:
                                <span class="text-[#3bb77e] font-semibold">
                                    <?php foreach ($order as $itemOrder) { ?> 
                                        <?php echo $itemOrder['address'] . ", ";?>
                                    <?php } ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <table class="border-4 border-[#3bb77e] w-full ">
                            <thead class="border-b w-full">
                                <tr class=" w-full border-[#3bb77e] border-b ">
                                    <th class="p-4 text-[#3bb77e]">Order</th>
                                    <th class="p-4 text-[#3bb77e]">Date</th>
                                    <th class="p-4 text-[#3bb77e]">Status</th>
                                    <th class="p-4 text-[#3bb77e]">Total</th>
                                    <th class="p-4 text-[#3bb77e]">Name products</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order as $itemOrder) { ?>
                                    <tr class="border-b border-[#3bb77e] ">
                                        <td class="p-4 text-center text-[#253d4e] font-semibold">
                                            <?php echo $itemOrder['code'] ?>
                                        </td>
                                        <td class="p-4 text-center text-[#253d4e] font-semibold">
                                        <?php echo $itemOrder['date'] ?>
                                        </td>
                                        <td class="p-4 text-center text-[#253d4e] font-semibold">
                                        <?php echo $itemOrder['status'] ?>
                                        </td>
                                        <td class="p-4 text-center text-[#253d4e] font-semibold">
                                            <?php echo "$" . $itemOrder['total'] ?> for
                                            <?php echo $itemOrder['number'] ?> item
                                        </td>

                                        <td class="p-4 text-center text-[#253d4e] font-semibold">
                                            <?php foreach ($itemOrder['name'] as $productName): ?>
                                                <?php echo $productName; ?><br>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>


        <!-- ===================Footer=================== -->
        <?php include_once './view/inc/_footer.php' ?>
    </div>
</body>

</html>