<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Siswa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/dashBoard/img/logo.png" rel="icon">
    <link href="assets/dashBoard/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/dashBoard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dashBoard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/dashBoard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/dashBoard/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/dashBoard/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/dashBoard/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/dashBoard/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/dashBoard/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="dashboard" class="logo d-flex align-items-center">
                <img src="assets/dashBoard/img/logo.png" alt="">
                <span class="d-none d-lg-block">E-BAYAR</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">



                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/dashBoard/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">J.Waw</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Jono Waw</h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="profile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed " href="dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " href="datasiswa">
                    <i class="bi bi-people-fill"></i>
                    <span>Data Siswa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="dataadmin">
                    <i class="bi bi-person"></i>
                    <span>Data Admin</span>
                </a>
                <div>
                    @yield('content')
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="components-alert">
                    <i class="bi bi-menu-button-wide"></i><span>Tanggungan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tanggunganspp">
                            <i class="bi bi-circle"></i><span>Spp</span>
                        </a>
                    </li>
                    <li>
                        <a href="tanggunganuanggedung">
                            <i class="bi bi-circle"></i><span>Uang Gedung</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="penarikan">
                    <i class="bx bxl-bitcoin"></i>
                    <span>Penarikan</span>
                </a>
                <div>
                    @yield('content')
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="laporan">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Laporan</span>
                </a>
                <div>
                    @yield('content')
                </div>
            </li>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data Siswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-12">
                    <div class="row-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>

                                {{-- <button type="button" class="btn btn-primary">Primary</button> --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                    Tambah Data
                                </button>

                            </div>
                        </div>
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <p> </p>
                                    <!-- Modal Button Tambah Data -->
                                    <div class="d-grid gap-10 d-md-flex justify-content-md-end">
                                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            Tambah Data
                                        </button> --}}
                                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tambah Data Siswa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row g-3">
                                                            <div class="col-12">
                                                                <label for="username" class="form-label">Username</label>
                                                                <input type="text" class="form-control" id="username">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="email" class="form-control" id="nama">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="no_telephone" class="form-label">No Telephone</label>
                                                                <input type="password" class="form-control" id="no_telephone">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="text" class="form-control" id="email">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="alamat" class="form-label">Alamat</label>
                                                                <input type="text_area" class="form-control" id="alamat">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="gambar" class="form-label">Foto</label>
                                                                <input type="file" class="form-control" id="gambar">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span></span>
                                        <a class="btn btn-light disabled" role="button" aria-disabled="true"></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data Siswa </h5>
                                    {{-- <p>Jumlah Tanggunan : 25</p> --}}
                                    <!-- Tabel -->
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">No Telephone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa as $ss)
                                            <tr>
                                            <td>{{ $ss->id }}</td>
                                            <td>{{ $ss->username }}</td>
                                            <td>{{ $ss->nama }}</td>
                                            <td>{{ $ss->no_telephone }}</td>
                                            <td>{{ $ss->email }}</td>
                                            <td>{{ $ss->alamat }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $ss->gambar) }}" height="100px" width="100px" alt="Siswa Photo" class="border m-2">
                                            </td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hapus</button></td>
                                            <td><button type="button" class="btn btn-primary"width: 100%;
                                                margin-top: 10px;>Edit</button></td>
                                            </tr>
                                                {{-- </tbody>
                                        <tbody> --}}
                                            @endforeach
                        </div><!-- End Recent Sales -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> --}}
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/dashBoard/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/dashBoard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dashBoard/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/dashBoard/vendor/echarts/echarts.min.js"></script>
    <script src="assets/dashBoard/vendor/quill/quill.min.js"></script>
    <script src="assets/dashBoard/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/dashBoard/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/dashBoard/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/dashBoard/js/main.js"></script>

</body>

</html>