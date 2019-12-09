﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Algoritma</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="../../ini/index.php">ALGORITMA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/unikama.gif" width="60" height="60" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SKRIPSI</div>
                    <div class="email">TEKNIK INFORMATIKA - UNIKAMA</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../pages/ui/profil.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>

                            <li role="seperator" class="divider"></li>
                            <li><a href="../pages/examples/sign-in.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../pages/Algorithm.php">
                            <i class="material-icons">text_fields</i>
                            <span>Algoritma</span>
                        </a>
                    </li>
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Layanan Kesehatan</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../pages/tables/rumah_sakit.php">Daftar Rumah Sakit Kota Malang</a>
                        </li>
                        <li>
                            <a href="../pages/tables/klinik.php">Daftar Klinik Kota Malang</a>
                        </li>
                        <li>
                            <a href="../pages/tables/puskesmas.php">Daftar Puskesmas Kota Malang</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../pages/maps/google.php">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a> Admin</a>.
                </div>
                <div class="image">
                    <img src="../images/simbolunikama.jpg" width="85" height="45" alt="User" />
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>Sekilas Tentang Algoritma</h1>
        </div>
        <!-- Body Copy -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Informasi</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            
                        </ul>
                    </div>
                    <div class="body">
                        
                        <p>
                            Lokasi layanan kesehatan di Kota Madya Malang membutuhkan sebuah algoritma dalam pencarian rute tercepat dari lokasi awal pengguna (user) ke lokasi tujuan.
                        </p>
                        <p>
                            Terdapat bermacam-macam algoritma pathfinding yang memiliki kekurangan dan kelebihan masing-masing. Tujuan dari analisis perbandingan ini adalah membandingkan algoritma dijkstra, a star dan generate and test dalam menentukan akses tercepat ke lokasi layanan kesehatan di Kodya Malang.
                        </p>
                        <p>
                            Hasil perbandingan dari ketiga metode tersebut dapat diketahui algoritma apa yang paling efisien dan yang paling baik digunakan dalam menentukan akses tercepat ke lokasi layanan kesehatan di Kodya Malang.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Body Copy -->
        
        <!-- Unordered List -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>ALGORITMA DJIKSTRA</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            
                        </ul>
                    </div>
                    <div class="body">
                        <ul>
                            <li>Salah satu teknik pencarian jalur terpendek dengan prinsip greedy</li>
                            <li>Algoritma yang menggunakan sisi berbobot minimum dalam setiap langkah untuk mencari solusi</li>
                            <li>Memulai pencarian pada satu titik dengan nilai graf terkecil dari titik awal.</li>
                            
                           
                        </ul>
                        <div class="image">
                             <img src="../images/djikstra.gif" width="280" height="150" alt="User" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>ALGORITMA A STAR (A*)</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            
                        </ul>
                    </div>
                    <div class="body">
                        <ol>
                            <li>Salah satu algoritma Best First Search yang menggabungkan Uniform Cost Search dan Greedy Best First Search.</li>
                            <li>Biaya yang diperhitungkan didapat dari biaya sebenarnya ditambah dengan biaya perkiraan.</li>
                            <li>Termasuk dalam algoritma heuristik yaitu pencarian dengan cara melebar dalam menemukan solusi dengan menghitung hambatan.</li>
                            
                        </ol>
                        <div class="image">
                             <img src="../images/astar.gif" width="280" height="280" alt="User" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>ALGORITMA GENERATE AND TEST</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled">
                            <li>Salah satu metode paling sederhana dalam teknik pencarian heuristik dengan menggunakan prosedur Depth First Search (DFS).</li>
                            <li>Solusi harus dibangkitkan secara lengkap sebelum melakukan test.</li>
                            <li>Iterasi berhenti setelah solusi ditemukan.</li>
                            
                        </ul>
                        <div class="image">
                             <img src="../images/generate.jpg" width="280" height="230" alt="User" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Unordered List -->
    </div>
</section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>