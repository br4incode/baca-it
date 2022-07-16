<?php

require 'functions.php';
// mulai session
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../.");
    exit;
}

// <!-- cetak session login -->
   if ($_SESSION['admin']) {
    $login = $_SESSION['admin'];

    $result = mysqli_query($conn, "SELECT * FROM multi_user WHERE id = '$login'");
    $data = mysqli_fetch_assoc($result);
  } 
  // akhir cetak session Login


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Bacait - Profile</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
    <!-- Pignose Calender -->
    <link
      href="./plugins/pg-calendar/css/pignose.calendar.min.css"
      rel="stylesheet"
    />
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css" />
    <link
      rel="stylesheet"
      href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css"
    />
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- start link favicon -->
    <link
      rel="apple-touch-icon-precomposed"
      sizes="57x57"
      href="../favicon/apple-touch-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="../favicon/apple-touch-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="../favicon/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="../favicon/apple-touch-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="60x60"
      href="../favicon/apple-touch-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="120x120"
      href="../favicon/apple-touch-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="76x76"
      href="../favicon/apple-touch-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="152x152"
      href="../favicon/apple-touch-icon-152x152.png"
    />
    <link
      rel="icon"
      type="image/png"
      href="favicon-196x196.png"
      sizes="196x196"
    />
    <link
      rel="icon"
      type="image/png"
      href="../favicon/favicon-96x96.png"
      sizes="96x96"
    />
    <link
      rel="icon"
      type="image/png"
      href="../favicon/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="../favicon/favicon-16x16.png"
      sizes="16x16"
    />
    <link
      rel="icon"
      type="image/png"
      href="../favicon/favicon-128.png"
      sizes="128x128"
    />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <!-- end link favicon -->
  </head>

  <body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle
            class="path"
            cx="50"
            cy="50"
            r="20"
            fill="none"
            stroke-width="3"
            stroke-miterlimit="10"
          />
        </svg>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
            Nav header start
        ***********************************-->
      <div class="nav-header">
        <div class="brand-logo">
          <a href="index">
            <b class="logo-abbr"
              ><img src="logo/it-logo-6882B7887A-seeklogo.com.png" alt="" />
            </b>
            <span class="logo-compact"
              ><img src="./images/logo-compact.png" alt=""
            /></span>
            <span class="brand-title">
              <img src="logo/bacait text.png" alt="" />
            </span>
          </a>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
      <div class="header">
        <div class="header-content clearfix">
          <div class="nav-control">
            <div class="hamburger">
              <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
          </div>
          <div class="header-right">
            <ul class="clearfix">
              <li class="icons dropdown">
                <a href="javascript:void(0)" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="badge badge-pill gradient-2">3</span>
                </a>
                <div
                  class="drop-down animated fadeIn dropdown-menu dropdown-notfication"
                >
                  <div
                    class="dropdown-content-heading d-flex justify-content-between"
                  >
                    <span class="">2 New Notifications</span>
                    <a href="javascript:void()" class="d-inline-block">
                      <span class="badge badge-pill gradient-2">5</span>
                    </a>
                  </div>
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="javascript:void()">
                          <span class="mr-3 avatar-icon bg-success-lighten-2"
                            ><i class="icon-present"></i
                          ></span>
                          <div class="notification-content">
                            <h6 class="notification-heading">
                              Events near you
                            </h6>
                            <span class="notification-text"
                              >Within next 5 days</span
                            >
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void()">
                          <span class="mr-3 avatar-icon bg-danger-lighten-2"
                            ><i class="icon-present"></i
                          ></span>
                          <div class="notification-content">
                            <h6 class="notification-heading">Event Started</h6>
                            <span class="notification-text">One hour ago</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="icons dropdown">
                <div
                  class="user-img c-pointer position-relative"
                  data-toggle="dropdown"
                >
                  <span class="activity active"></span>
                  <img
                    src="images/profile/profile.jpg"
                    height="40"
                    width="40"
                    alt=""
                  />
                </div>
                <div
                  class="drop-down dropdown-profile animated fadeIn dropdown-menu"
                >
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="app-profile"
                          ><i class="icon-user"></i> <span>Profile</span></a
                        >
                      </li>
                      <hr class="my-2" />
                      <li>
                        <a href="logout"
                          ><i class="icon-key"></i> <span>Logout</span></a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
      <div class="nk-sidebar">
        <div class="nk-nav-scroll">
          <ul class="metismenu" id="menu">
            <li class="nav-label">Menu</li>
            <li>
              <a href="." aria-expanded="false">
                <i class="icon-speedometer menu-icon"></i
                ><span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="app-upload" aria-expanded="false">
                <i class="icon-badge menu-icon"></i
                ><span class="nav-text">Upload E-book</span>
              </a>
            </li>
            <li>
              <a href="daftar-ebook" aria-expanded="false">
                <i class="icon-badge menu-icon"></i
                ><span class="nav-text">Daftar E-book</span>
              </a>
            </li>
            <li>
              <a href="widgets" aria-expanded="false">
                <i class="icon-badge menu-icon"></i
                ><span class="nav-text">Daftar Request E-book</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--**********************************
            Sidebar end
        ***********************************-->

      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
        <div class="container-fluid mt-3">
          <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Profile</h5>
                  <div class="row justify-content-center">
                    <div class="col-sm">
                      <div class="text-center">
                        <img
                          src="images/profile/profile.jpg"
                          width="150"
                          alt="profile"
                          class="rounded-circle"
                        />
                      </div>
                      <h4 class="mt-2 text-center"><?= $data['username']; ?></h4>
                      <hr />
                      <h5 class="mb-3">Admin Account Settings</h5>
                      <!-- bagian form -->
                      <form action="" method="">
                        <div class="form-group row">
                          <label
                            class="col-lg-4 col-form-label"
                            for="val-username"
                            >Username
                          </label>
                          <div class="col-lg-6">
                            <input
                              type="text"
                              class="form-control"
                              id="val-username"
                              name="val-username"
                              value="<?= $data['username']; ?>"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            class="col-lg-4 col-form-label"
                            for="val-username"
                            >Password
                          </label>
                          <div class="col-lg-6">
                            <input
                              type="text"
                              class="form-control"
                              id="val-username"
                              name="val-username"
                              placeholder="Ganti Password"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            class="col-lg-4 col-form-label"
                            for="val-username"
                            >Photo
                          </label>
                          <div class="input-group mb-3 col-lg-6">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" />
                              <label class="custom-file-label"
                                >Pilih Gambar</label
                              >
                            </div>
                          </div>
                          <small class="input-group mb-3 col-lg-6" style="font-style: italic;">*rekomendasi gambar dengan ukuran persegi</small>
                        </div>
                        <div class="input-grup">
                          <a href=""><button type="submit" class="btn btn-danger">
                            Hapus Akun
                          </button></a>
                          <button type="submit" class="btn btn-primary">
                            Simpan
                          </button>
                        </div>
                      </form>
                      <!-- akhir bagian form -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- #/ container -->
      </div>
      <!--**********************************
            Content body end
        ***********************************-->

      <!--**********************************
            Footer start
        ***********************************-->
      <div class="footer">
        <div class="copyright">
          <p>
            Copyright &copy; Designed & Developed by
            <a href="https://themeforest.net/user/quixlab">Bacait</a> 2018
          </p>
        </div>
      </div>
      <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="./js/dashboard/dashboard-1.js"></script>
  </body>
</html>
