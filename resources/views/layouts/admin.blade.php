<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->

                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <div class="accordion accordion-flush" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button nav-small-cap collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-controls="collapseOne">
                                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                        <span class="hide-menu">Data</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="./asisten" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user"></i>
                                                </span>
                                                <span class="hide-menu">Data Asisten</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-school"></i>
                                                </span>
                                                <span class="hide-menu">Data Kelas</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-book"></i>
                                                </span>
                                                <span class="hide-menu">Data Materi</span>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button nav-small-cap collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                        <span class="hide-menu">Generator</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-qrcode"></i>
                                                </span>
                                                <span class="hide-menu">Code Generator</span>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button nav-small-cap collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                        <span class="hide-menu">Data</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse "
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-layout-dashboard"></i>
                                                </span>
                                                <span class="hide-menu">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-layout-dashboard"></i>
                                                </span>
                                                <span class="hide-menu">Dashboard</span>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav"
                        style="border-bottom: 1px solid black; ">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <p>Hi, Admin !</p>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @yield('content')

        </div>

    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>

    <script>
        const timeElement = document.getElementById("clock");

        function updateTime() {
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            // Format the string with leading zeroes
            const clockStr =
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            timeElement.innerText = clockStr;
        }

        updateTime();
        setInterval(updateTime, 1000);
    </script>
</body>

</html>
