<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>| Simpus</title>
  <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/assets/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <link rel="shortcut icon" href="/assets/images/favicon.png"/>
  <script src="/assets/js/chart.js"></script>
  <script src="/assets/vendors/base/vendor.bundle.base.js"></script>
  <script src="/assets/js/template.js"></script>
  <script src="/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="/assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
  <script src="/assets/vendors/justgage/raphael-2.1.4.min.js"></script>
  <script src="/assets/vendors/justgage/justgage.js"></script>
  <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="/assets/js/dashboard.js"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- Start Top Nav -->
    <div class="horizontal-menu">
      <!-- Start First Nav -->
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="/Home"><h1>SIMPUS</h1></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">

              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <span class="count bg-success">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-information mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Application Error</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        Just now
                      </p>
                    </div>
                  </a>
                </div>
              </li>

              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">Johnson</span>
                  <span class="online-status"></span>
                  <img src="/assets/images/faces/face28.png" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <!-- End First Nav -->

      <!-- Start Second Nav -->
      <nav class="bottom-navbar">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a class="nav-link" href="/Home">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">Data Obat</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <ul>
                  <li class="nav-item"><a class="nav-link" href="/DataObat">Data Obat</a></li>
                  <li class="nav-item"><a class="nav-link" href="/DataObatMasuk">Data Obat Masuk</a></li>
                  <li class="nav-item"><a class="nav-link" href="/DataObatKeluar">Data Obat Keluar</a></li>
                  <li class="nav-item"><a class="nav-link" href="/DataObatKadaluarsa">Data Obat Kadaluarsa</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a href="/Reports" class="nav-link">
                <i class="mdi mdi-finance menu-icon"></i>
                <span class="menu-title">Report</span>
                <i class="menu-arrow"></i>
              </a>
            </li>

            <li class="nav-item">
              <a href="/Setting" class="nav-link">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Pengaturan Akun</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Second Nav -->
    </div>
    <!-- End Top Nav -->


    <!-- Start Content -->
    <?php
      echo $this->renderSection('content');
    ?>
    <!-- End Content -->

    <!-- Start Footer -->
    <footer class="footer">
      <div class="footer-wrap">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </div>
</body>
</html>