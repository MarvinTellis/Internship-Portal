<?php
session_start();
// variable declaration
$username = "";
$email    = "";
$mobile = "";
$errors = array();
$_SESSION['success'] = ""; 

// connect to database
$db = mysqli_connect('localhost', 'root', '','internship');


// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);

  $result = mysqli_query($conn,"SELECT * FROM faculty_signup");
  $num_rows = mysqli_num_rows($result);

  $id = "F".($num_rows+201) ;

  $query = "INSERT INTO faculty_signup (f_id,name,email,mobile,password) 
  			       VALUES('$id' , '$username', '$email', '$mobile' , '$password_1')";
  	mysqli_query($db, $query);

  	header('location: login.php');
  }


// LOGIN USER
  if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM faculty_signup WHERE name='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
    {
        $row = $results->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['fid'] = $row["f_id"];
        $_SESSION['email'] = $row["email"];
        header('location: dashboard.php');
    }else {
      echo ("Invalid username/password ");
    }
}
