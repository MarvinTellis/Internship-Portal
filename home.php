<!DOCTYPE html>
<html lang="en">
<head>
  <title>KJSCE Internship Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

 h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  

  .container-fluid {
      padding: 60px 50px;
  }

.navbar {
      margin-bottom: 0;
      background-color: #2F2FA2;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #000000 !important;
      background-color: #f64c72 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #f64c72 !important;
  }
  .logo {
      color: #2F2FA2;
      font-size: 200px;
  }
.jumbotron {
      background-color: #2F2FA2;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }

  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #2F2FA2;
  }
  .carousel-indicators li {
      border-color: #2F2FA2;
  }
  .carousel-indicators li.active {
      background-color: #2F2FA2;
  }
  table, th, td {
  	padding: 10px;
    text-align: left;
   border: 1px solid black;
}

footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #2F2FA2;
}

</style>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Navigation Bar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#home">Logo</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
      		<li><a href="#about">ABOUT</a></li>
      		<li><a href="#highlights">HIGHLIGHTS</a></li>
        	<li><a href="#internship">INTERNSHIPS</a></li>
    	</ul>

      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      	</ul>
    </div>
  </div>
</nav>

<!-- Jumptron -->
<div class="jumbotron text-center">
  <h1>KJSCE Internship Portal</h1> 
  <p>where opportunities arise</p> 
  <form class="form-inline">
    <div class="input-group">
      <input type="text" class="form-control" size="50" placeholder="Search" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">GO</button>
      </div>
    </div>
  </form>
</div>

<!-- About Us -->

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About KJSCE Internship Cell</h2>
      <br><h4>INFORMATION REGARDING INTENSHIPS</h4><br>
  	</div>
  	<div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
  </div>
</div>

<div id="highlights">
<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="" alt="Image 1" style="width:100%;">
      </div>

      <div class="item">
        <img src="" alt="Image 2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="" alt="Image 3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>


<div id="internship" class="container-fluid">   
 <div class = "row">
    <div class="table-responsive col-md-6">
     	<?php
	
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

		?>
		<h2>Inhouse</h2>
		<table>
           <tr>
            <th>NAME</th>
            <th>TOPIC</th>
            <th>DESCRIPTION</th>
            <th>START</th>
            <th>END</th>
           </tr>

        <?php
		$sql = "SELECT * FROM inhouse";
		$result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
        echo "<tr>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["topic"] . "</td>";
              echo "<td>" . $row["description"] . "</td>";
              echo "<td>" . $row["start_date"] . "</td>";
              echo "<td>" . $row["end_date"] . "</td>";
        echo "</tr>";
        }
 		?>
 		</table>
    </div>

    <div class="table-responsive col-md-6">
    	<h2>Company</h2>
    	<table>
           <tr>
            <th>NAME</th>
            <th>TOPIC</th>
            <th>DESCRIPTION</th>
            <th>START</th>
            <th>END</th>
            <th>STIPEND</th>
           </tr>

    	<?php
    	
		$sql = "SELECT * FROM gov_company";
		$result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
        echo "<tr>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["topic"] . "</td>";
              echo "<td>" . $row["description"] . "</td>";
              echo "<td>" . $row["start_date"] . "</td>";
              echo "<td>" . $row["end_date"] . "</td>";
              echo "<td>" . $row["stipend"] . "</td>" ;
         echo "</tr>";
        }
 		?>
 		</table>
    </div>
</div>
</div>

<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Website made by KJSCE <a href="https://www.somaiya.edu/kjsce" title="Visit KJSCE">www.somaiya.edu/kjsce</a></p> 
</footer>

</body>
</html>
