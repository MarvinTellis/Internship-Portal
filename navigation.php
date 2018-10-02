 <?php

          session_start();
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "internship";

  // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

          $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
          $fid = isset($_SESSION['fid']) ? $_SESSION['fid'] : '' ;
          $email = isset($_SESSION['email']) ? $_SESSION['email'] : '' ;

          $_SESSION['username'] = $username;
          $_SESSION['fid'] = $fid;
          $_SESSION['email'] = $email;

  ?>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="dashboard.php">Dashboard</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>

    <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

            <a class="dropdown-item" href="#">
              <i class="fa fa-user-circle fa-fw fa-4x"></i>
            </a>
            <a class="dropdown-item" href="#dashboard"><h4><?php echo $username ?></h4></a>
            <span class="dropdown-item-text" href="#"><?php echo $email ?></span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#dashboard">
      <i class="fa fa-angle-up"></i>
    </a>

     <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are you sure you want to end your current session??<br>Select "Logout" below if you are ready </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="jquery/jquery.easing.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/dashboard.min.js"></script>