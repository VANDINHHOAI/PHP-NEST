<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="shortcut icon" href="../../../public/media/img/logo.png" type="image/x-icon">
    <link href="../public/admin/css/style.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../public/admin/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once './view/inc/_navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once './view/inc/_sideleft.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 ">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <?php $quantity = 0 ?>
                        <?php foreach ($productList as $cart) { ?>
                        <?php $quantity += $cart['quantity'];
                        } ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex fs-1 w-100 gap-1 align-items-center justify-content-center">
                                    <?php echo $quantity ?>
                                    <i class='bx bx-package fs-1'></i>
                                </div>
                                <div class="title w-100 text-center fw-bold">PRODUCTS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="../admin/products/index.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <?php foreach ($customers as $customersUser) { ?>
                                    <div class="card-body d-flex fs-1 w-100 gap-1 align-items-center justify-content-center">
                                        <?php echo $customersUser['user'] ?>
                                        <i class='bx bx-user' ></i>
                                    </div>
                                <?php  } ?>
                                <div class="title w-100 text-center fw-bold">CUSTOMERS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="../admin/users/index.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex fs-1 w-100 gap-1 align-items-center justify-content-center">
                                    520
                                    <i class='bx bx-conversation' ></i>
                                </div>
                                <div class="title w-100 text-center fw-bold">COMMENTS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex fs-1 w-100 gap-1 align-items-center justify-content-center">
                                    25.2k
                                    <i class='bx bx-search-alt-2'></i>
                                </div>
                                <div class="title w-100 text-center fw-bold">PAGE VIEWS</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Sales
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Categories sale
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>

                                <tbody>
                                    <?php foreach ($staff as $item) { ?>
                                        <tr>
                                            <td><?php echo $item['name']; ?></td>
                                            <td><?php echo $item['position']; ?></td>
                                            <td><?php echo $item['office']; ?></td>
                                            <td><?php echo $item['age']; ?></td>
                                            <td><?php echo $item['starDate']; ?></td>
                                            <td>$<?php echo $item['salary']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Tải thư viện Chart.js từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../public/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../public/admin/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../public/admin/js/scripts.js"></script>
    <script src="../public/admin/js/simple-datatables@latest.js" crossorigin="anonymous"></script>
    <script src="../public/admin/js/datatables-simple-demo.js"></script>
</body>

<script>
    // Dữ liệu thống kê (thay thế bằng dữ liệu thực tế từ cơ sở dữ liệu của bạn)
    var data = {
        labels: ["Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
        datasets: [{
            label: 'Doanh số bán hàng',
            data: [1500, 2000, 1800, 2500, 2200],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Cấu hình biểu đồ
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Lấy đối tượng canvas
    var ctx = document.getElementById('myAreaChart').getContext('2d');

    // Tạo biểu đồ cột
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>


<script>
    // Dữ liệu thống kê (thay thế bằng dữ liệu thực tế từ cơ sở dữ liệu của bạn)
    var data = {
        labels: ["Vegetables", "Fresh Seafood", "Milk and Dairies", "Bread and juice", "Wines & Drinks"],
        datasets: [{
            data: [30, 20, 15, 25, 10],
            backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#8A2BE2", "#00FF00"],
            hoverBackgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#8A2BE2", "#00FF00"]
        }]
    };

    // Cấu hình biểu đồ tròn
    var options = {};

    // Lấy đối tượng canvas
    var ctxPie = document.getElementById('myBarChart').getContext('2d');

    // Tạo biểu đồ tròn
    var myPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: data,
        options: options
    });
</script>


</html>