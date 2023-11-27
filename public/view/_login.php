<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account - Nest</title>
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
                        <li class="ml-1 text-[#7e7e7e]"><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content-section -->
        <!-- container -->
        <div>
            <div class="w-full">
                <div class="w-full pt-20 pb-[50px] md:px-72">
                    <div class="px-[15px] w-full block">
                        <h2 class="text-center text-[40px] text-[#253d4e] font-bold mb-5">Log in</h2>
                        <form class="p-5 w-full rounded-3xl border block" method="post" action="login.php">
                            <i style="color: red;"><?php if(isset( $_SESSION['flash_message'])) echo  $_SESSION['flash_message']; unset( $_SESSION['flash_message']); ?></i>
                            <label for="email" class="block mb-[5px] text-[#253d4e] font-semibold">Username or email address <span class="text-red-500 font-semibold">*</span></label>
                            <input id="email" name="email" class="w-full h-16 px-5 border border-[#3bb77e] outline-none mb-4 rounded-lg" type="text" placeholder="Your email">
                            <label for="password" class="block mb-[5px] text-[#253d4e] font-semibold">Password <span class="text-red-500 font-semibold">*</span></label>
                            <input id="password" name="password" class="w-full h-16 px-5 border border-[#3bb77e] outline-none mb-4 rounded-lg" type="password" placeholder="Your password">
                            <div class="flex items-center mb-5 gap-x-5">
                                <input type="submit" value="Login" class="bg-[#3bb77e] px-5 py-3 text-white font-semibold rounded-md hover:bg-yellow-500
                                transition duration-500 ease-in-out cursor-pointer">
                                <a href="#"></a>
                                </input>
                                <div class="flex items-center gap-x-1">
                                    <input class="w-6 h-6" type="checkbox">
                                    <span>Remember me</span>
                                </div>
                            </div>
                            <div class="text-[#3bb77e] hover:text-red-500 transition duration-300 ease-in-out">
                                <p><a href="#">Lost your password?</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===Footer=== -->
        <?php include_once './view/inc/_footer.php' ?>
    </div>

</body>

</html>