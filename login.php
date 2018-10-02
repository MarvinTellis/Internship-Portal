<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #32cd32;
  text-align: center;
  border: 1px;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 370px;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #32cd32;
  border: none;
  border-radius: 5px;
}
  
</style>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" onsubmit="return validation()" action="login.php"/>
      <?php include('server.php') ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" id = "user" />
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id= "pass" />
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  		<p>
      Not yet a member? <a href="register.php">Sign up</a> </p>
    <p>
      <a href="home.php">Home page</a>
    </p>
  </form>

  <script type="text/javascript">
    

    function validation(){

      var user = document.getElementById('user').value;
      var pass = document.getElementById('pass').value;

       if(user == ""){
        document.getElementById('username').innerHTML =" ** Please fill the username field **";
        return false;
      }
      if((user.length <= 4) || (user.length > 24)) {
        document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20 **";
        return false; 
      }
      if(!isNaN(user)){
        document.getElementById('username').innerHTML =" ** Only characters are allowed **";
        return false;
      }

        if(pass == ""){
        document.getElementById('passwords').innerHTML =" ** Please fill the password field **";
        return false;
      }
      if((pass.length <= 5) || (pass.length > 20)) {
        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  6 and 20 **";
        return false; 
      }
    }
</script>
</body>
</html>