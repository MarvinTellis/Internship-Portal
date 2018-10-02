<!DOCTYPE html>
<html lang="en">
<head>
  <title>Applicant list</title>

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

  <?php
    // Retrieve the URL variables (using PHP).
    $i_id = $_GET["id"];
  ?>


    <div id="wrapper">

      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="new_internship.php">
            <i class="fa fa-fw fa-pencil"></i>
            <span>New Internship</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="view_internship.php">
            <i class="fa fa-fw fa-folder-open"></i>
            <span>View Internships</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-cog"></i>
            <span>Settings</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <?php

          $sql = "SELECT * FROM inhouse where internship_id = '$i_id' ";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();

          ?>

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="view_internship.php">View Internships</a>
            </li>
            <li class="breadcrumb-item">
              <a href='display.php?id=<?php echo $i_id ?>'><?php echo $row["name"] ?></a>
            </li>
            <li class="breadcrumb-item active"> Applicants list </li>
          </ol>

          <h3>List of applicants: </h3><br>

          <div class="table-responsive">
            <table border="2px" cellpadding="15px">
              <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Branch</th>
              </tr>

            <?php

            $sql = "SELECT * FROM applicants where internship_id = '$i_id' ";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc())
            {
              echo "<tr>";
                echo "<td>". $row["student_id"] . "</td>";
              echo "</tr>";
            }
            ?>
            </table>
          </div>

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