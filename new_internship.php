<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Internship</title>
    
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
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="new_internship.php">
            <i class="fa fa-fw fa-pencil"></i>
            <span>New Internship</span></a>
        </li>
        <li class="nav-item">
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

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">New Internships</li>
          </ol>

          <div class="card card-register mx-auto mt-5 mb-5">
          <div class="card-header">Float New Internship</div>
            <div class="card-body">

              <form method="post" action="new_internship.php">
                <?php include('insert.php'); ?>
              

                <div class="form-group">
                  <div class="form-row">
                  <label for="staticid" class="col-sm-8 col-form-label"><b>Faculty Details</b></label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">     
                    <label for="staticid" class="col-sm-2 col-form-label">Faculty ID : </label>
                      <div class="col-sm-3">
                        <input type="text" readonly class="form-control-plaintext" id="staticid" value="<?php echo $fid ?>">
                      </div>
                          
                    <label for="staticid" class="col-sm-3 col-form-label">Faculty Name : </label>
                      <div class="col-sm-4">
                        <input type="text" readonly class="form-control-plaintext" id="staticid" value="<?php echo $username ?>">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                  <label for="staticid" class="col-sm-8 col-form-label"><b>Internship Details</b></label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="internshipname" name="name" class="form-control" placeholder="Internship Name" required="required" autofocus="autofocus">
                        <label for="internshipname">Internship Name</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="topic" name = "topic" class="form-control" placeholder="Topic" required="required">
                        <label for="topic">Topic</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="department" name = "department" class="form-control" placeholder="Department" required="required">
                    <label for="department">Department</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="description" name = "description" class="form-control" placeholder="Description" required="required">
                    <label for="description">Description</label>
                  </div>
                </div>
                <div class="form-group">
                   <div class="form-row"> 
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="date" id="startdate" name = "startdate" class="form-control" placeholder="Start date(yyyy-mm-dd)" required="required">
                        <label for="startdate">Start Date</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="date" id="enddate" name="enddate" class="form-control" placeholder="End date(yyyy-mm-dd)" required="required">
                        <label for="enddate">End Date</label>
                      </div>
                    </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit" name="float">Float Internship</button>
              </form>
            </div>
          </div>
          <!-- /#card -->

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