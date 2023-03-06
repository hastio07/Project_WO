<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moelia | @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="template/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="template/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="template/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS for manage jadwal only -->
    <link href="template/vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="template/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
    <!-- End CSS  -->

    <!-- CSS for all page -->
    <link rel="stylesheet" href="template/vendor/chart.js/dist/Chart.min.css">
    <!-- End CSS  -->

    <!-- css edit -->
    <link rel="stylesheet" href="template/assets/css/css-modif/Dashboard.css">
    <link rel="stylesheet" href="template/assets/css/css-modif/manageakun.css">
    <link rel="stylesheet" href="template/assets/css/css-modif/ManageJadwal.css">
    <link rel="stylesheet" href="template/assets/css/css-modif/ManageProduk.css">
    <link rel="stylesheet" href="template/assets/css/css-modif/test.css">
    <link rel="stylesheet" href="template/assets/css/css-modif/ManagePerusahaan.css">

    <!-- end css -->

    <link rel="stylesheet" href="template/assets/css/style.min.css">
    <link rel="stylesheet" href="template/assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="template/assets/css/dark.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        <header class="header-navbar fixed">
            <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="theme-switch-icon"></div>
                </div>
                <div class="header-content">
                    <div class="notification dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Message</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="message-image">
                                        <img src="template/assets/images/avatar1.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            John
                                        </div>
                                        <div class="body">
                                            Please call me at 9pm
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="template/assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Michele
                                        </div>
                                        <div class="body">
                                            Please come to my party
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="template/assets/images/avatar1.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            Brad
                                        </div>
                                        <div class="body">
                                            I have something to discuss, please call me soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="template/assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Anel
                                        </div>
                                        <div class="body">
                                            Sorry i'm late
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="template/assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Mary
                                        </div>
                                        <div class="body">
                                            Please answer my question last night
                                        </div>
                                        <div class="time">Last month</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="notification dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="badge">12</span>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Notification</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="message-icon text-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            There's incoming event, don't miss it!!
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-info">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            Your licence will expired soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-success">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="message-content">
                                        <div class="body">
                                            Successfully register new user
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-menu-end">
                        <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="label">
                                <span></span>
                                <div>Admin</div>
                            </div>
                            <img class="img-user" src="template/assets/images/avatar1.png" alt="user" srcset="">
                        </a>
                        <ul class="dropdown-menu small">
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-user"></i> Profile
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-settings"></i> Setting
                                    </div>
                                </a>
                                <form action="/logout" method="post" id="logout">
                                    @csrf
                                    <a href="#" onclick="document.getElementById('logout').submit()">
                                        <div class="description">
                                            <i class="ti-power-off"></i> Logout
                                        </div>
                                    </a>
                                </form>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <nav class="main-sidebar ps-menu">
            <div class="sidebar-toggle action-toggle">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="sidebar-opener action-toggle">
                <a href="#">
                    <i class="ti-angle-right"></i>
                </a>
            </div>
            <div class="sidebar-header">
                <img src="template/assets/images/logoMulia.jpg" class="rounded-circle w-100" alt="user1">
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li class="active">
                        <a href="dashboard" class="link">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/manageakun" class="link">
                            <i class="ti-id-badge"></i>
                            <span>Manage Akun</span>
                        </a>
                    </li>
                    <li>
                        <a href="/manage-produk" class="link">
                            <i class="ti-view-grid"></i>
                            <span>Manage Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="/manage-artikel" class="link">
                            <i class="ti-write"></i>
                            <span>Manage Artikel</span>
                        </a>
                    </li>
                    <li>
                        <a href="/managejadwal" class="link">
                            <i class="ti-agenda"></i>
                            <span>Manage Jadwal</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-shopping-cart-full"></i>
                            <span>Manage Pesanan</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="/manage-pesanan" class="link"><span>Selesai Dikerjakan</span></a></li>
                            <li><a href="/manage-pesanan" class="link"><span>Belum Dikerjakan</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-gallery"></i>
                            <span>Manage Gallery</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="/manage-gallery" class="link"><span>Vidio Gallery</span></a></li>
                            <li><a href="/manage-gallery" class="link"><span>Photo Gallery</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/manageperusahaan" class="link">
                            <i class="ti-home"></i>
                            <span>Manage Perusahaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/managepegawai" class="link">
                            <i class="ti-user"></i>
                            <span>Manage Pegawai</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-content">
            @yield('content')
        </div>

        <div class="settings">
            <div class="settings-icon-wrapper">
                <div class="settings-icon">
                    <i class="ti ti-settings"></i>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Copyright © 2023 &nbsp <a href="https://www.instagram.com/moeliadesign/" target="_blank" class="ml-1">Moelia Design</a> <span> . All rights Reserved</span>
    </footer>
    <div class="overlay action-toggle">
    </div>
    </div>

    <!-- js for all page -->
    <script src="template/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="template/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="template/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="template/assets/js/page/index.js"></script>
    <script src="template/assets/js/main.js"></script>
    <script src="template/assets/js/page/JsAddForm.js"></script>
    <!-- ======= -->

    <!-- script for upload form image -->
    <script src="template/assets/js/page/jsUploadImg.js"></script>
    <!-- ======= -->



    <!-- js for page table-->
    <script src="template/vendor/jquery/dist/jquery.min.js"></script>
    <script src="template/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="template/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="template/assets/js/page/datatables.js"></script>
    <!-- ======= -->


    <!-- script for table -->
    <script>
        DataTable.init()
    </script>
    <!-- ======= -->

    <script>
        Main.init()
    </script>

    <script src="template/vendor/jquery/dist/jquery.min.js"></script>

    <!-- script for datepicker-->
    <script src="template/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy'
        }).on('changeDate', function(e) {
            console.log(e.target.value);
        });
    </script>
    <!-- ======= -->
</body>

</html>
