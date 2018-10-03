<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>

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

<script>
function loadDoc(str) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tab").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.php?pwd="+str, true);
  xhttp.send();
}

function myfunction() {
	document.getElementById("tab").innerHTML = "Hello";
}
</script>

<body id="dashboard">

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
        <li class="nav-item ">
          <a class="nav-link" href="view_internship.php">
            <i class="fa fa-fw fa-folder-open"></i>
            <span>View Internships</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="history.php">
            <i class="fa fa-fw fa-history"></i>
            <span>History</span></a>
        </li>
        <li class="nav-item active">
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
            <li class="breadcrumb-item active">Profile</li>
          </ol>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-fw fa-cog"></i>
              Profile settings</div>
            <div class="card-body">
            	<form method="post" onsubmit="return validation()" action="profile.php">
            		<?php 
            		$result = mysqli_query($conn,"SELECT * FROM faculty_signup WHERE f_id = '$fid' ");
				    $row = $result->fetch_assoc();
				    $mobile = $row["mobile"];
				    $password = $row["password"];
    				?>
            		<div class="form-group">
                  		<div class="form-row">
                    		<div class="col-sm-3 col-md-3">
                    			<i class="fa fa-user-circle fa-fw" style="font-size:150px"></i>
                    			
                    			<br><br>
                    			<label for="staticid" class="col-form-label"><b>User name :</b></label>
                        			<input type="text" readonly class="form-control-plaintext" id="staticid" value="<?php echo $username ?>">
                        		
                          		
                          		
                    			<label for="staticid" class="col-form-label"><b>Email :</b> </label>
                        			<input type="text" readonly class="form-control-plaintext" id="staticid" value="<?php echo $email ?>">
                        		
                    		</div>
                    		<div class="col-sm-9 col-md-9 mt-5">
                    		<div id = "tab">
                    			<div class="form-group">
				                  <div class="form-label-group">
				                    <input type="text" id="username" name = "username" class="form-control" value="<?php echo $username ?>">
				                    <label for="username">Username</label>
				                  </div>
				                </div>
				                <div class="form-group">
				                  <div class="form-label-group">
				                    <input type="text" id="email" name = "email" class="form-control" value="<?php echo $email ?>">
				                    <label for="email">Email</label>
				                  </div>
				                </div>
				                <div class="form-group">
				                  <div class="form-label-group">
				                    <input type="text" id="mobile" name = "mobile" class="form-control" value="<?php echo $mobile ?>">
				                    <label for="mobile">Mobile no</label>
				                  </div>
				                </div>
				                <button type="button" class="btn btn-success" name = "save">Save changes</button>
				                <button type="button" class="btn btn-success" name = "change" onclick="loadDoc('<?php echo $password; ?>')">Change Password</button>
				            </div>
				            <div id = "test"></div>
				            </div>





                    	</div>
                    </div>
                </form>
            </div>
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