<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tanggungan Spp</title>
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
                <a class="nav-link collapsed" href="datasiswa">
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
                <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="components-alert">
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
            <h1>Data Tanggungan SPP</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data Tanggungan SPP</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- End Page Title -->
        <section class="section dashboard">
            
        <div class="row">

                <!-- Left side columns -->
                <div class="col-12">
                    <div class="row-12">
                        <div class="row-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title"></h1>
    
                                    {{-- <button type="button" class="btn btn-primary">Primary</button> --}}
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                        <i class="bi bi-plus-circle"></i>
                                    </button>
                                    <div class="filter">
                                        <p> </p>
                                        <!-- Modal Button Tambah Data -->
                                        <div class="d-grid gap-10 d-md-flex justify-content-md-end">
        
                                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Tambah Tanggungan Spp</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3" action="{{ route('/postSpp') }}" method="POST">
                                                                @csrf
                                                                <div class="col-12">
                                                                    <input value="Tanggungan Spp" type="hidden" class="form-control @error('tipe') is-invalid @enderror" id="alamat" name="tipe">
                                                                </div>
                                                                @error('tipe')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                                
                                                                <div class="col-12">
                                                                    <label for="bulan" class="form-label">Bulan</label>
                                                                    <select id="bulan @error('jenis_kelamin') is-invalid @enderror" name="bulan" class="form-select" aria-label="Default select example" >
                                                                        <option selected value=""   ></option>
                                                                        <option value="Januari">Januari</option>
                                                                        <option value="Februari">Februari</option>
                                                                        <option value="Maret">Maret</option>
                                                                        <option value="April">April</option>
                                                                        <option value="Mei">Mei</option>
                                                                        <option value="Juni">Juni</option>
                                                                        <option value="Juli">Juli</option>
                                                                        <option value="Agustus">Agustus</option>
                                                                        <option value="September">September</option>
                                                                        <option value="Oktober">Oktober</option>
                                                                        <option value="November">November</option>
                                                                        <option value="Desember">Desember</option>
                                                                      </select>
                                                                </div>
                                                                @error('bulan')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                               
                                                                <div class="col-12">
                                                                    <label for="jumlah_bayar" class="form-label @error('no_telephone') is-invalid @enderror">Jumlah Pembayaran</label>
                                                                    <input placeholder="Rp." value="{{ old('jumlah_bayar') }}" type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar">
                                                                </div>
                                                                @error('jumlah_bayar')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
    
                                                                <div class="col-12">
                                                                    <label for="awal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                                                                    <input value="{{ old('email') }}" type="date" class="form-control @error('awal_pembayaran') is-invalid @enderror" id="awal_pembayaran" name="awal_pembayaran" >
                                                                </div>
                                                                @error('awal_pembayaran')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
    
                                                                <div class="col-12">
                                                                    <input value="2" type="hidden" class="form-control @error('id_admin') is-invalid @enderror" id="alamat" name="id_admin">
                                                                </div>
                                                                @error('id_admin')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
       
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <span></span>
                                            <a class="btn btn-light disabled" role="button" aria-disabled="true"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Data Tanggungan SPP </h5>
                                    @if (session('flash_message_success'))
                                    <div class=" d-md-flex justify-content-md-end">
                                    <div class="alert alert-success">
                                        <i class="bi bi-check-circle me-1"></i>
                                        {{ session('flash_message_success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    </div>
                                    @endif
                        @if (session('flash_message_danger'))
                                    <div class=" d-md-flex justify-content-md-end">
                                    <div class="alert alert-danger">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        {{ session('flash_message_danger') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    </div>
                                    @endif
                                    <p>Jumlah Tanggunan : 25</p>
                                    <!-- Tabel -->
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Bulan</th>
                                                <th scope="col">Tipe</th>
                                                <th scope="col">Jumlah Pembayaran</th>
                                                <th scope="col">Awal pembayaran</th>
                                               
                                                
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tanggunganspp as $ss)
                                            <tr>
                                                <td>{{ $ss->id }}</td>
                                                <td>{{ $ss->bulan }}</td>
                                                <td><h5><span class="badge bg-info text-dark">{{ $ss->tipe }}</span></h5></td>
                                                <td>Rp.{{ $ss->jumlah_bayar }}</td>
                                                <td>{{ $ss->awal_pembayaran }}</td>
                                                
                                              
                                                <td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editSpp-{{$ss->id}}"><i class="ri ri-edit-2-line"></i></button>
                                                    <a onclick="return confirm('Apa Anda Yakin Menghapus Data tersebut?')" href="{{ url('delete-spp',$ss->id) }}" class="btn btn-danger btn-sm "><i class="ri ri-delete-bin-5-line"></i></a>
                                                </td>
                                                <div class="modal fade" id="editSpp-{{ $ss->id }}" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Tambah Tanggungan Spp</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3" action="{{ url('/editSpp/'.$ss->id )}}" method="POST">
                                                                @csrf
                                                               
                                                                
                                                                <div class="col-12">
                                                                    <label for="bulan" class="form-label">Bulan</label>
                                                                    <select id="bulan @error('bulan') is-invalid @enderror" name="bulan" class="form-select" aria-label="Default select example" >
                                                                        <option selected value="{{ $ss->bulan }}"   ></option>
                                                                        <option value="Januari">Januari</option>
                                                                        <option value="Februari">Februari</option>
                                                                        <option value="Maret">Maret</option>
                                                                        <option value="April">April</option>
                                                                        <option value="Mei">Mei</option>
                                                                        <option value="Juni">Juni</option>
                                                                        <option value="Juli">Juli</option>
                                                                        <option value="Agustus">Agustus</option>
                                                                        <option value="September">September</option>
                                                                        <option value="Oktober">Oktober</option>
                                                                        <option value="November">November</option>
                                                                        <option value="Desember">Desember</option>
                                                                      </select>
                                                                </div>
                                                                @error('bulan')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                               
                                                                <div class="col-12">
                                                                    <label for="jumlah_bayar" class="form-label @error('no_telephone') is-invalid @enderror">Jumlah Pembayaran</label>
                                                                    <input placeholder="Rp." value="{{ $ss->jumlah_bayar }}" type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar">
                                                                </div>
                                                                @error('jumlah_bayar')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
    
                                                                <div class="col-12">
                                                                    <label for="awal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                                                                    <input value="{{ $ss->awal_pembayaran }}" type="date" class="form-control @error('awal_pembayaran') is-invalid @enderror" id="awal_pembayaran" name="awal_pembayaran" >
                                                                </div>
                                                                @error('awal_pembayaran')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
    
                                                             
       
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                                @endforeach
                                        </tbody>
                                        
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main><!-- End #main -->
    
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