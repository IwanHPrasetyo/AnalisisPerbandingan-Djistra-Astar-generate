<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Google Maps</title>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400px;
        widht: 100%;
      }
      
    </style>

    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="../../../ini/index.php">GOOGLE MAPS</a>
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
                    <img src="../../images/unikama.gif" width="60" height="60" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SKRIPSI</div>
                    <div class="email">TEKNIK INFORMATIKA - UNIKAMA</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../../pages/ui/profil.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>

                            <li role="seperator" class="divider"></li>
                            <li><a href="../../pages/examples/sign-in.php"><i class="material-icons">input</i>Sign Out</a></li>
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
                    <a href="../../index.php">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="../../pages/Algorithm.php">
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
                        <a href="../../pages/tables/rumah_sakit.php">Daftar Rumah Sakit Kota Malang</a>
                    </li>
                    <li>
                        <a href="../../pages/tables/klinik.php">Daftar Klinik Kota Malang</a>
                    </li>
                    <li>
                        <a href="../../pages/tables/puskesmas.php">Daftar Puskesmas Kota Malang</a>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="../../pages/maps/google.php">
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
                <img src="../../images/simbolunikama.jpg" width="85" height="45" alt="User" />
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
            <!-- Google Maps -->
             <!-- Select -->
<div class="row clearfix">
<div class="col-lg-14">
    <div class="card">
        <div class="header">
            <h2>
                PILIH RUTE
            </h2>
            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="mapcoba.php">Djikstra</a></li>
                                        <li><a href="google.php">A Star</a></li>
                                        <li><a href="mapcoba2.php">Generate And Test</a></li>
                                    </ul>
                                </li>
                            </ul>
        </div>

        <form method="post" action="">
            <div class="row clearfix">
                <div class="col-sm-6">
                    <select name="awal">
                        <option>-- Rute Awal --</option>
                        <option>Kampus UNIKAMA</option>
                        <option>Kost Janti</option>
                        <option>Polsek Sukun</option>
                    </select>
                </div>
                <div class="row clearfix">
                <div class="col-sm-6">
                    <select name="akhir">
                        <option>-- Rute Akhir --</option>
                        <option>Puskesmas Janti</option>
                        <option>Klinik RN Klayatan</option>
                        <option>Rumah Sakit Islam Aisyiyah</option>
                    </select>
                    <button type="submit" class="btn bg-red btn-xs waves-effect">
                                    <i class="material-icons">search</i>
                                    <span>SEARCH</span>
                                    </button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<!-- #END# Select -->
            <!-- Basic Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GOOGLE MAPS
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div  id="map"></div>

                            <style>
                        #map {
                            height: 400px;
                            width: 100%;
                        }
                        </style>
                        <script>

      function initMap() {
        var uluru = {lat: -8.002103, lng: 112.619832};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
          
        });
      }
    </script>
    <script> async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB04Iha4MnlTVAvjGXQ_9vlQoH-ZTijq4U&callback=initMap">
    </script>
                        </div>
                    </div>
                </div>
            </div>
                            <script>

function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: -8.00373, lng: 112.619287},
          mapTypeId: 'terrain'
        });

        var flightPlanCoordinates = [
            <?php
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'analisis';
            
    
            $aw   =$_POST['awal'];
            $ak   =$_POST['akhir'];
            $node_aw ="";
    
            if($aw == "Kampus UNIKAMA"){
    
                $aw = "1";
    
            }
            elseif($aw == "Kost Janti"){
                
                $aw = "1";
                            
            }
            elseif($aw == "Polsek Sukun"){
                
                $aw = "1";
                            
            }
            if($ak == "Puskesmas Janti"){
                
                $ak = "p04";
                $node_aw  = "A";          
            }
            elseif($ak == "Klinik RN Klayatan"){
                
                $ak = "k16";
                $node_aw  = "A1";          
            }
            elseif($ak == "Rumah Sakit Islam Aisyiyah"){
                
                $ak = "rs06";
                $node_aw  = "A2";          
            }
    
    
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
            
            $query = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node_aw' order by fn limit 1");
            $data  = mysqli_fetch_array($query);
            
            $node = $data['node_awal'];
            
            $query3 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
            $data3  = mysqli_fetch_array($query3);
            
            $lat = $data3['lat'];
            $lon = $data3['lng']; 
            
            do{
            
                echo"{lat: $lat, lng: $lon},";
            
            $query2 = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node' order by fn limit 1");
            $data2  = mysqli_fetch_array($query2);
            
            $node  = $data2['node_tujuan'];
            
            $query4 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
            $data4  = mysqli_fetch_array($query4);
            
            $lat = $data4['lat'];
            $lon = $data4['lng']; 
            
            }while($node .= "");
            ?>
        
        ];

        var tempat = [


    <?php 
        
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'analisis';
        
        $aw   =$_POST['awal'];
        $ak   =$_POST['akhir'];
        $node_aw ="";

        if($aw == "Kampus UNIKAMA"){
            
                        $aw = "1";
            
            }
        elseif($aw == "Kost Janti"){
                        
                        $aw = "1";
                                    
            }
        elseif($aw == "Polsek Sukun"){
                        
                        $aw = "1";
                                    
            }
        if($ak == "Puskesmas Janti"){
            
            $ak = "p04";
            $node_aw  = "A";          
        }
        elseif($ak == "Klinik RN Klayatan"){
            
            $ak = "k16";
            $node_aw  = "A1";          
        }
        elseif($ak == "Rumah Sakit Islam Aisyiyah"){
            
            $ak = "rs06";
            $node_aw  = "A2";          
        }
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        $query = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node_aw' order by fn limit 1");
        $data  = mysqli_fetch_array($query);
        
        $node = $data['node_awal'];
        
        $query3 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
        $data3  = mysqli_fetch_array($query3);
        
        $lat = $data3['lat'];
        $lon = $data3['lng']; 
        
        do{
        
        echo"[$lat, $lon],";
        
        $query2 = mysqli_query($conn,"SELECT * from a_star where id_awal = '$aw' and id_lakes = '$ak' and node_awal = '$node' order by fn limit 1");
        $data2  = mysqli_fetch_array($query2);
        
        $node  = $data2['node_tujuan'];
        
        $query4 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
        $data4  = mysqli_fetch_array($query4);
        
        $lat = $data4['lat'];
        $lon = $data4['lng']; 
        
        }while($node .= "");
        
        
                  
?>
         
        ];

        for(var i = 0;i<tempat.length;i++){

            var image = '';
            var ngene = tempat[i];
            var bckMarker = new google.maps.Marker({
            position: {lat: ngene[0] , lng: ngene[1]},
            map: map,
            icon: image
           
        });   

        }


        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        flightPath.setMap(map);
      }

      
    </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example -->
            <div class="row clearfix">
                <div class="col-lg-12">
                     <div class="card">
                        <div class="header">
                            <h2>
                                 HASIL ANALISIS PERBANDINGAN ALGORITMA
                            </h2>
                        <ul class="header-dropdown m-r--5">
                    <li class="dropdown">      
                </li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="content">
                        <div class="text">ALGORITMA DJIKSTRA</div>
                    <div class="number count-to" data-from="0" data-to="31,91 %" data-speed="1000" data-fresh-interval="20">74,3 %</div>
                </div>
            </div>
        </div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4">
                    <div class="content">
                        <div class="text">ALGORITMA A STAR</div>
                            <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20">74,3 %</div>
                         </div>
                    </div>
                </div>
        <div class="col-lg-4">
            <div class="info-box-4">
                <div class="content">
                    <div class="text">ALGORITMA GENERATE AND TEST</div>
                    <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20">77,3 %</div>
                </div>
            </div>
        </div>
    </div> 
</div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Google Maps API Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB04Iha4MnlTVAvjGXQ_9vlQoH-ZTijq4U&callback=initMap&libraries=places"></script>

    <!-- GMaps PLugin Js -->
    <script src="../../plugins/gmaps/gmaps.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>