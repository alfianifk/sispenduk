<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Singkir</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

   <style>
    /* ukuran peta */
    #map {
        height: 450px;
    }
</style> --}}

    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a class="h4 text-primary" href="index.html">Desa Singkir</a>
                        </div>
                        {{-- <div class="header-top-right">

                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2" >
                                        <img src="assets/images/faces/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Pengunjung</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Online   </p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                  <li><a class="dropdown-item" href="/login">Login Admin</a></li>
                                </ul>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li
                                class="menu-item  ">
                                <a href="index.html" class='menu-link'>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li
                            class="menu-item  ">
                                <a href="index.html" class='menu-link'>
                                    <span>Artikel</span>
                                </a>
                            </li>

                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span>Profile Desa</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Profile Wilayah Desa</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Sejarah Desa</a>
                                            </li>
                                        </ul>
                                    </div> 
                                </div> 
                            </li> 

                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span>Pemerintahan Desa</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Visi dan Misi</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Pemerintahan Desa</a>
                                            </li>
                                        </ul>
                                    </div> 
                                </div> 
                            </li> 

                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span>Data Desa</span>
                                </a>
                                <div class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Data Wilayah Administratif</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'>Data Penduduk</a>
                                            </li>
                                        </ul>
                                    </div> 
                                </div> 
                            </li>

                            <li
                            class="menu-item  ">
                            <a href="/login" class='menu-link'>
                                <span>Login Admin</span>
                            </a>
                        </li> 
                        </ul>
                    </div>
                </nav>
            </header>