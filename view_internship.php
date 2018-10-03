<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Internships</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
    
  <!-- Page level plugin CSS-->
  <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">

  
  <!-- Custom styles for this template-->
  <link href="css/dashboard.css" rel="stylesheet">

  <!-- Font awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="dashboard">

  <?php 

    if (isset($_POST['drop']))
    {//to run PHP script on submit
      if(!empty($_POST['check_list']))
      {
      // Loop to store and display values of individual checked checkbox.
        foreach($_POST['check_list'] as $selected)
        {
        echo $selected."</br>";
        }
      }
    }


  ?>

  <?php include('navigation.php'); ?>

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

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard </a>
            </li>
            <li class="breadcrumb-item active">View Internships</li>
          </ol>
            
            <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i>
              Internships floated by you</div>
            <div class="card-body">
              <form action="#" method="post">
            	<?php 
		          $sql = "SELECT * FROM inhouse where f_id = '$fid' ";
		          $result = $conn->query($sql);

		          if (mysqli_num_rows($result) > 0) 
		          {
		            $count = mysqli_num_rows($result);
		            ?>

	              <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
			            	<th>NAME</th>
			        	    <th>TOPIC</th>
			        	    <th>NO OF APPLICANTS</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
			        	    <th>VIEW APPLICANT LIST</th>
                    <th></th>
			            </tr>
	                  </thead>
	                  <tfoot>
	                   	<tr>
			            	<th>NAME</th>
			        	    <th>TOPIC</th>
			        	    <th>NO OF APPLICANTS</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
			        	    <th>VIEW APPLICANT LIST</th>
                    <th></th>
			            </tr>
	                  </tfoot>
	                  <tbody>
                    <?php

			            while($row = $result->fetch_assoc())
			            {
			              $i_id = $row["internship_id"];
			              $sql2 = "SELECT * FROM applicants where internship_id = '$i_id' ";
			              $result2 = $conn->query($sql2);
			              $no_applicants = mysqli_num_rows($result2);
			              echo "<tr>";
			                echo "<td><a href= 'display.php?id=$i_id'>". $row["name"] . "</a></td>";
			                echo "<td>" . $row["topic"] . "</td>";
			                echo "<td>" . $no_applicants. "</td>";
                      echo "<td>" . $row["start_date"] . "</td>";
                      echo "<td>" . $row["end_date"] . "</td>";
			                echo "<td><a href= 'applicant_list.php?id=$i_id'> View >> </a></td>";
                      echo "<td><input type='checkbox' name='check_list[]' value= '$i_id'> </td>";
			              echo "</tr>";
			            }
                  ?>
			           </tbody>
                </table>
                <?php
			       }
			        else{
			              echo "No Internships floated yet";
			          }
			          ?>
              </div>
              <button class="btn btn-primary" type="submit" name="drop" style="margin: 20px; float: right;"> DROP </button>
            </form>
            </div>

            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
    

    <!-- Page level plugin JavaScript-->
    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap4.js"></script>
    
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>



  </body>
  </html>