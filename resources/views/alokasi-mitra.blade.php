<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../asset/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../asset/img/favicon.png">
    <title>
        Optima Dashboard
    </title>
    <!-- Mapbox Api -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/asset/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/asset/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="/asset/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <style>
        #map { width: 100%; height: 500px;}
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
	<!-- Modal -->

<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header"> <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i> <a class="navbar-brand m-0"> <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo"> <span class="ms-1 font-weight-bold">Optima Dashboard</span> </a> </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link " href="../pages/index.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"> <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i> </div>
        <span class="nav-link-text ms-1">Dashboard</span> </a> </li>
      <li class="nav-item"> <a class="nav-link active" href="../pages/list-of-projects.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"> <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i> </div>
        <span class="nav-link-text ms-1">List of Projects</span> </a> </li>
      <li class="nav-item"> <a class="nav-link " href="list-permintaan.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"> <i class="ni ni-circle-08 text-success text-sm opacity-10"></i> </div>
        <span class="nav-link-text ms-1">List Permintaan</span> </a> </li>
      <li class="nav-item"> <a class="nav-link " href="../pages/profile.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"> <i class="ni ni-single-02 text-dark text-sm opacity-10"></i> </div>
        <span class="nav-link-text ms-1">Profile</span> </a> </li>
    </ul>
  </div>
</aside>
<main class="main-content position-relative border-radius-lg ">
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">List of Projects</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Alokasi Mitra</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center"> <a href="javascript:;" class="nav-link text-white font-weight-bold px-0"> <i class="fa fa-user me-sm-1"></i> <span class="d-sm-inline d-none">Sign In</span> </a> </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center"> <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner"> <i class="sidenav-toggler-line bg-white"></i> <i class="sidenav-toggler-line bg-white"></i> <i class="sidenav-toggler-line bg-white"></i> </div>
          </a> </li>
        </ul>
      </div>
    </div>
  </nav> 
  <!-- Navbar --> 
  <!-- End Navbar -->
  
  <div class="container-fluid py-4">
    <div class="row">
<div class="col-md-8">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <h6>Form Alokasi Mitra</h6>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
<div class="col-md-12">
                <div class="form-group">
                  <label for="tanggal" class="form-control-label">Tanggal Permintaan</label>
                  <input class="form-control" type="date" id="tanggal" disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Permintaan</label>
                  <input class="form-control" type="text" value="[HEM] Smart Connect" disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input2" class="form-control-label">Nama LOP</label>
                  <input class="form-control" type="text" value="...Nama LOP..." disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input2" class="form-control-label">Tematik LOP</label>
                  <input class="form-control" type="text" value="...Tematik LOP..." disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input2" class="form-control-label">STO</label>
                  <input class="form-control" type="text" value="...Nama STO..." disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="latlong" class="form-control-label">TIKOR LOP</label>
                  <input type="text" class="form-control" value="...LatLong..." disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="latlong" class="form-control-label">Lokasi LOP</label>
                  <input type="text" class="form-control" value="...Lokasi LOP..." disabled>
                </div>
              </div>
			  <div class="col-md-12">
                <div class="form-group">
                  <label for="latlong" class="form-control-label">RAB OnDesk</label>
                  <input type="text" class="form-control" value="Rp......,-" disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="keterangan" class="form-control-label">Keterangan</label>
                  <input type="text" class="form-control" value="..............." disabled>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="mitra" class="form-control-label">Alokasi Mitra</label>
                  <select name="mitra" class="form-control" id="mitra">
                    <option>Pilih Mitra...</option>
                    <option>test1</option>
                    <option>test2</option>
                  </select>
                </div>
              </div>
            </div>
<hr class="horizontal dark">
            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-success btn-sm ms-auto">Submit</button>
                <button class="btn btn-danger btn-sm ms-auto">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
<div class="card-body pt-0">
  <div class="table-responsive p-0">
    <table class="table align-items-center justify-content-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mitra</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">LOP Done</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">LOP in Progress</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-middle text-left"><div class="d-flex px-2"> <span class="text-secondary text-xs font-weight-bold">PT. TA</span> </div></td>
          <td class="align-middle text-left"><span class="text-secondary text-xs font-weight-bold">12</span></td>
          <td class="align-middle text-left"><span class="text-secondary text-xs font-weight-bold">3</span></td>
        </tr>
        <tr>
          <td class="align-middle text-left"><div class="d-flex px-2"> <span class="text-secondary text-xs font-weight-bold">KOPEG</span></div></td>
          <td class="align-middle text-left"><span class="text-secondary text-xs font-weight-bold">3</span></td>
          <td class="align-middle text-left"><span class="text-secondary text-xs font-weight-bold">4</span></td>
        </tr>
        <tr>
          <td class="align-middle text-left"><div class="d-flex px-2"> <span class="text-secondary text-xs font-weight-bold">WMT</span></div></td>
          <td class="align-middle text-left"><span class="text-secondary text-xs font-weight-bold">2</span></td>
          <td class="align-middle text-left"><span class="text-secondary text-xs font-weight-bold">1</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
        </div>
      </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start"> Optima © 
              <script>
                  document.write(new Date().getFullYear())
                </script> 
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</main>
<!--   Core JS Files   -->
<script src="/asset/js/core/popper.min.js"></script>
    <script src="/asset/js/core/bootstrap.min.js"></script>
    <script src="/asset/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/asset/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/asset/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/asset/js/argon-dashboard.min.js?v=2.0.4"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>