<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="css/dashboard.css" rel="stylesheet">

  <!-- Font awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="dashboard">

<?php include('navigation.php'); ?>

    <div id="wrapper">

      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new_internship.php">
            <i class="fa fa-fw fa-pencil"></i>
            <span>New Internship</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_internship.php">
            <i class="fa fa-fw fa-folder-open"></i>
            <span>View Internships</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="history.php">
            <i class="fa fa-fw fa-history"></i>
            <span>History</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="fa fa-fw fa-cog"></i>
            <span>Profile</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
   
          <?php
          $sql = "SELECT * FROM inhouse where f_id = '$fid' ";
          $result = $conn->query($sql);

          if (mysqli_num_rows($result) > 0) 
          {
            ?>
            <div class="row">
            <?php

            while($row = $result->fetch_assoc())
            {
              $x = $row["internship_id"];
              $sql2 = "SELECT * FROM applicants where internship_id = '$x' and f_id = '$fid'";
              $result2 = $conn->query($sql2);
              $no_applicants = mysqli_num_rows($result2);
              ?>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5"><a href='display.php?id=<?php echo $x?>' style="color: #ffffff"> <?php echo "Name : " . $row['name'];?> </a></div>
                    <span class="float-left">
                      <?php echo "Applicants : ". $no_applicants; ?>
                    </span>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href='applicant_list.php?id=<?php echo $x?>'>
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <?php
            } ?>

          </div>

          <?php
        }
        else{
              echo "No Internships floated yet";
          }
          ?>
      </div>
      </div>
      <!-- /.content-wrapper -->

      <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>


    </div>
    <!-- /#wrapper -->
</body>
</html>