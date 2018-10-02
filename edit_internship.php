<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Internship</title>
    
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
    $value = $_GET["value"];
  ?>

    <div id="wrapper">

      <ul class="sidebar navbar-nav">
        <li class="nav-item">
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
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-cog"></i>
            <span>Settings</span></a>
        </li>
      </ul>

      <div id="content-wrapper">
        <div class="container-fluid">

          <?php
          $sql = "SELECT * FROM inhouse where f_id = '$fid' ";
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
              <a href="display.php?id=<?php echo $i_id ?>"> <?php echo $row["name"] ?> </a>
            </li> 
            <li class="breadcrumb-item active">Edit Internship</li>
          </ol>

          <div class="card card-register mx-auto mt-5 mb-5">
          <div class="card-header">Edit Internship</div>
            <div class="card-body">

              <form method="post" onsubmit="return validation()" action="edit_internship.php?id=<?php echo $i_id?>&value=<?php echo $value?>">
                <div class="form-group">
                  <div class="form-row">
                  <label for="staticid" class="col-sm-8 col-form-label"><b>Previous Value</b></label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                  <label for="staticid" class="col-sm-8 col-form-label"> <?php echo $row[$value] ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                  <label for="staticid" class="col-sm-8 col-form-label"><b>New Value</b></label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                  <textarea class="form-control" rows="5" id="new_value"> <?php echo $row[$value] ?> </textarea>
                </div>

                <span id="warning" class="text-danger font-weight-bold"> </span>

                <br><br>

                <button class="btn btn-primary btn-block" type="submit" name="save">Save Changes</button>
              </form>

              <script type="text/javascript">
    

              function validation(){

                var new_value = document.getElementById('new_value').value;
                var val = "<?php echo $value ?>";

                //window.alert(new_value);
                if(new_value == ""){
                  document.getElementById('warning').innerHTML =" ** Please fill the New value field **";
                  return false;
                }
                
                if(val == "dept")
                {
                  if(!isNaN(new_value)){
                    document.getElementById('warning').innerHTML =" ** Only characters are allowed **";
                    return false;
                    }
                }
                if(val == "start_date" || val == "end_date")
                {

                  if(new_value.indexOf('-') < 4 ){
                    document.getElementById('warning').innerHTML =" ** Enter a date in yyyy-mm-dd format **";
                    return false;
                  }

                  var i = new_value.indexOf('-') ;

                  var str1 = new_value.charAt(i+1);
                  var str2 = new_value.charAt(i+2);
                  var str = str1.concat(str2);

                  var month = Number(str);
                  if(month>12)
                  {
                    document.getElementById('warning').innerHTML =" ** Enter a valid month **";
                    return false;
                  }
                }
              }

              </script>

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
