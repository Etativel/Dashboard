<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SISTA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
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
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary" style="color:white">SISTA</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="/" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="charts" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div >
                        <a href="admin/disaster" class="ms-3" >
                            <span class="ms-3">Login</span>
                        </a>
                       
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Bencana</p>
                                <h6 class="mb-0">{{ $total_bencana }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total On-Going</p>
                                <h6 class="mb-0">{{ $total_ongoing }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Terdampak</p>
                                <h6 class="mb-0">{{ $total_terdampak }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Meninggal</p>
                                <h6 class="mb-0">{{ $total_meninggal }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Terluka</p>
                                <h6 class="mb-0">{{ $total_terluka }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Hilang</p>
                                <h6 class="mb-0">{{ $total_hilang }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Bangunan Rusak</p>
                                <h6 class="mb-0">{{ $total_bangunanrusak }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <p class="mb-2">Total Bangunan Hancur</p>
                                <h6 class="mb-0">{{ $total_bangunanhancur }}</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4" style>
                        <h6 class="mb-0">Peta Bencana</h6>
                    </div>
                    <div class="row">
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuyxv6vUm7hYFb1rYtV-RW6BdowEf2FmI&callback=initMap">

                        </script>
                            <script type="text/javascript">
                                //Array of JSON objects.
                                var markers = {!! $map_array !!};
                                    
                                window.onload = function () {
                                    LoadMap();
                                }
                                function LoadMap() {
                                    var mapOptions = {
                                        center: new google.maps.LatLng(markers[0].latitude, markers[0].longitute),
                                        zoom: 5,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };
                                    var infoWindow = new google.maps.InfoWindow();
                                    var latlngbounds = new google.maps.LatLngBounds();
                                    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                            
                                    for (var i = 0; i < markers.length; i++) {
                                        var data = markers[i]
                                        var myLatlng = new google.maps.LatLng(data.latitude, data.longitute);
                                        var marker = new google.maps.Marker({
                                            position: myLatlng,
                                            map: map,
                                            title: data.disaster_title
                                        });
                                        (function (marker, data) {
                                            google.maps.event.addListener(marker, "click", function (e) {
                                                infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.disaster_title + "</div>" + 
                                                "<div style = 'width:200px;min-height:40px'>" + " Terdampak :" + data.affected + "</div>" +
                                                "<div style = 'width:200px;min-height:40px'>" + "Terluka :" + data.injured + "</div>" +
                                                "<div style = 'width:200px;min-height:40px'>" + "Hilang :" + data.missing + "</div>" +
                                                "<div style = 'width:200px;min-height:40px'>" + "Meninggal :" + data.killed + "</div>" +
                                                "<div style = 'width:200px;min-height:40px'>" + "Bangunan Rusak :" + data.building_damaged + "</div>" +
                                                "<div style = 'width:200px;min-height:40px'>" + "Bangunan Hancur :" + data.building_destroyed + "</div>");
                                                infoWindow.open(map, marker);
                                            });
                                        })(marker, data);
                                        latlngbounds.extend(marker.position);
                                    }
                                    var bounds = new google.maps.LatLngBounds();
                                    map.setCenter(latlngbounds.getCenter());
                                    map.fitBounds(latlngbounds);
                                }
                            </script>
                            <div id="dvMap" style="width: 100%; height: 400px">
                            </div>
                    </div>
                </div>
            </div>
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