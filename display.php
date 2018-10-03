<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display</title>

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

<style>
  .option1 {
    display: inline-block; /* show on the same line */
    padding-right: 20px; /* small gap on the right of each header */
  }
</style>

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

         <?php

          $sql2 = "SELECT * FROM applicants where internship_id = '$i_id' ";
          $result2 = $conn->query($sql2);
          $no_applicants = mysqli_num_rows($result2);

          $sql1 = "SELECT * FROM inhouse where internship_id = '$i_id' ";
          $result1 = $conn->query($sql1);
          $row = $result1->fetch_assoc();

          
          ?>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="view_internship.php">View Internships</a>
            </li>
            <li class="breadcrumb-item active"> <?php echo $row["name"] ?> </li>
          </ol>

          <a href= 'applicant_list.php?id=<?php echo $i_id ?>'> View Applicant list >> </a><br><br>

          <h3 class="option1">Internship name : <?php echo $row["name"] ?></h3><p class="option1"><?php echo "<a href= 'edit_internship.php?id=$i_id&value=name'> Edit </a> "?></p><br><br>
          <h3 class="option1">No of applicants : <?php echo $no_applicants ?> </h3><br><br>
          <h3 class="option1">Department : <?php echo $row["dept"] ?> </h3><p class="option1"><?php echo "<a href= 'edit_internship.php?id=$i_id&value=dept'> Edit </a> "?></p><br><br>
          <h3 class="option1">Topic : <?php echo $row["topic"] ?> </h3><p class="option1"><?php echo "<a href= 'edit_internship.php?id=$i_id&value=topic'> Edit </a> "?></p><br><br>
          <h3 class="option1">Description : </h3><p class="option1"><?php echo "<a href= 'edit_internship.php?id=$i_id&value=description'> Edit </a> "?></p>
            <h5><?php echo $row["description"] ?> </h5><br><br>
          <h3 class="option1">Start Date : <?php echo $row["start_date"] ?> </h3><p class="option1"><?php echo "<a href= 'edit_internship.php?id=$i_id&value=start_date'> Edit </a> "?></p><br><br>
          <h3 class="option1">End Date : <?php echo $row["end_date"] ?> </h3><p class="option1"><?php echo "<a href= 'edit_internship.php?id=$i_id&value=end_date'> Edit </a> "?></p><br><br>

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