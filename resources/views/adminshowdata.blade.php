<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Show Data</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ asset('assets/admintm') }}/index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>MeetUp</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/admintm') }}/img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="adminindex" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>
                        Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle show" data-bs-toggle="dropdown"><i
                                class="fa fa-table me-2"></i> Master Data</a>
                        <div class="dropdown-menu bg-transparent border-0 show">
                            <a href="admininputdata" class="nav-item nav-link "><i class="bi bi-plus-square-fill"></i>
                                Input Data</a>
                            <a href="adminshowdata" class="nav-item nav-link active"><i class="bi bi-eye-fill"></i> Show
                                Data</a>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            @include('adminnavbar')


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    {{--  --}}

                    {{-- show model --}}
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Meeting Model</h6>
                            </div>
                            {{-- tabel --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Model ID</th>
                                            <th scope="col">Model</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>0</td>
                                            <td>Online</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>1</td>
                                            <td>Offline</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- show category --}}
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Kategori Meeting</h6>
                            </div>
                            {{-- tabel --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kategori ID</th>
                                            <th scope="col">Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>0</td>
                                            <td>Internal</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>1</td>
                                            <td>External</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- show room --}}
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Ruang Meeting (Hanya Meeting Model Offline)</h6>
                            </div>
                            {{-- table --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ID Ruangan</th>
                                            <th scope="col">Ruangan</th>
                                            <th scope="col">Kapasitas (orang)</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>Doe</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-warning m-2">Edit</button>
                                                <button type="button"
                                                    class="btn btn-outline-danger m-2">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- show agency --}}
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Instansi Tersedia</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ID Instansi</th>
                                            <th scope="col">Instansi</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>Doe</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-outline-warning m-2">Edit</button>
                                                <button type="button"
                                                    class="btn btn-outline-danger m-2">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- show user --}}
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">User</h6>
                            </div>
                            {{-- card --}}
                            <div class="row">
                                @foreach ($tuser as $u)
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-header text-muted">
                                                User ID/Email : {{ $u->email }}
                                            </div>
                                            <div class="card-body">
                                                @if (!empty($u->foto))
                                                <img src="{{ asset('fotoguru/' . $u->foto) }}" class="card-img-top" alt="User Image">
                                                @else
                                                    <!-- If 'foto' column is empty, you can display a placeholder image -->
                                                    <img src="{{ asset('fotoguru/') }}" class="card-img-top" alt="User Image">
                                                @endif
                                                <p class="card-text" style="text-align: left">
                                                    NIP : {{ $u->nip }}<br>
                                                    Nama : {{ $u->nama }}<br>
                                                    Jabatan : {{ $u->jabatan }}
                                                </p>
                                                <button type="button"
                                                    class="btn btn-outline-warning w-100 m-2">Edit</button>
                                                <button type="button"
                                                    class="btn btn-outline-danger w-100 m-2">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-sm-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-header text-muted">
                                            User ID/Email :
                                        </div>
                                        <div class="card-body">
                                            <img src="..." class="card-img-top" alt="...">
                                            <p class="card-text" style="text-align: left">
                                                NIP :<br>
                                                Nama :<br>
                                                Jabatan :
                                            </p>
                                            <button type="button"
                                                class="btn btn-outline-warning w-100 m-2">Edit</button>
                                            <button type="button"
                                                class="btn btn-outline-danger w-100 m-2">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            @include('adminfooter')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
