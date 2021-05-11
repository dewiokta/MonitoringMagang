
<!DOCTYPE html>
<html>
<head>
  <title>SIMONGA</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSRF Token -->
  <meta name="_token" content="PnZncWfQtQ5T7LcJWpFwVi6F3gQ4vmszIsZ8Affn">
  
  <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/star-laravel-free/template/favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-free/template/assets/plugins/@mdi/font/css/materialdesignicons.min.css">
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-free/template/assets/plugins/perfect-scrollbar/perfect-scrollbar.css">
  <!-- end plugin css -->

    <!-- <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-free/template/assets/plugins/plugin.css"> -->

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-free/template/css/app.css">
  <!-- end common css -->

  </head>
  
<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">      
          <br><br><br><br><br><br> 
            <ul class="nav">
              <li class="nav-item nav-profile not-navigation-link">
                <div class="nav-link">
                  <div class="user-wrapper">
                    <div class="profile-image">
                      <img src="https://upload.wikimedia.org/wikimedia/id/b/b8/Pertamina.png" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                      <p class="profile-name">Pertamina</p>
                      <div class="dropdown" data-display="static">
                        <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                          <small class="designation text-muted">Admin</small>
                          <span class="status-indicator online"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                          <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                              </div>
                              <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                              </div>
                              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                              </div>
                            </div>
                          </a>
                          <a class="dropdown-item mt-2"> Manage Accounts </a>
                          <a class="dropdown-item"> Change Password </a>
                          <a class="dropdown-item"> Check Inbox </a>
                          <a class="dropdown-item"> Sign Out </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="home_pt">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Home</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="ready_pt" aria-expanded="false" aria-controls="basic-ui">
                  <i class="menu-icon mdi mdi-dna"></i>
                  <span class="menu-title">Tugas Ready</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="selesai_pt" aria-expanded="false" aria-controls="basic-ui">
                  <i class="menu-icon mdi mdi-dna"></i>
                  <span class="menu-title">Tugas Selesai</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="mhs_pt" aria-expanded="false" aria-controls="basic-ui">
                  <i class="menu-icon mdi mdi-dna"></i>
                  <span class="menu-title">Data Mahasiswa</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
            </ul>
            <br><br><br>
      </nav>
      
      <!-- partial -->

      <!-- iki bagian card enek putihe dadi apik

      <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h2 class="card-title mb-0">Product Analysis</h2>
                      <div class="wrapper d-flex">
                        <div class="d-flex align-items-center mr-3">
                          <span class="dot-indicator bg-success"></span>
                          <p class="mb-0 ml-2 text-muted">Product</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="dot-indicator bg-primary"></span>
                          <p class="mb-0 ml-2 text-muted">Resources</p>
                        </div>
                      </div>
                    </div>
                    <div class="chart-container">
                      <canvas id="dashboard-area-chart" height="380"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> -->
      
      @section('konten')
            @show
      
      
      </div>
      
      <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Sistem Monitoring Magang Politeknik Negeri Malang</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">MK Proyek 1</span>
            </div>
      </footer>
  
</div>

</body>
</html>