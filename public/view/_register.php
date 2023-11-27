<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
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
                    <li class="ml-1 text-[#7e7e7e]"><span>My Account</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Content-section -->
    <!-- container -->
    <div class="rgt-container">
        <div class="rgt-wrapper">
            <div class="rgt-box">
                <div class="rgt-content">
                    <h2 class="rgt-content__title">Register</h2>
                    <form class="rgt-form" method="post" action="register.php">
                        <i style="color: red;"><?php if(isset( $_SESSION['flash_message'])) echo  $_SESSION['flash_message']; unset( $_SESSION['flash_message']); ?></i>
                        <label for="email" class="rgt-form__lable-email">Email</label>
                        <input id="email" name="email" type="text" class="rgt-form__input-email" placeholder="Your email">
                        <label for="password" class="rgt-form__lable-password">Password</label>
                        <input id="password" name="password" type="text" class="rgt-form__input-password" placeholder="Your password">
                        <label for="cf-password" class="rgt-form__lable-cf-password">Confirm password</label>
                        <input id="cf-password" name="c-password" type="text" class="rgt-form__input-cf-password" placeholder="Confirm your password">

                        <div class="rgt-form-action">
                            <input type="submit" value="Register" class="rgt-btn">
                                <a href=""></a>
                            </input>
                            <span><a href="../public/login.html">You have an account?</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- ===Footer=== -->
    <?php include_once './view/inc/_footer.php' ?>

    <script>

    </script>
</body>
</html>