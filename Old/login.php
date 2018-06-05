<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link href="css/custom.css" rel="stylesheet">
  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5" style="max-width: 25rem;">
      <div class="card-header">Login</div>
      <div class="card-body">
       
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="email">Username</label>
            <input class="form-control" name="username" type="text" placeholder="Enter Username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password" required>
          </div>
          
          <div class="form-group"> 
			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="customCheck1" name="remembeme">
  				<label class="custom-control-label" for="customCheck1"> Remember Password</label>
			</div>
          </div>
          
          <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
        </form>
        
    <?php
	$connection = mysqli_connect('localhost','root','','umpl');	  
	if(isset($_POST['login'])){		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		
		// header( "refresh:3;url=login.php" );
		
		$query = "SELECT * FROM users WHERE username = '{$username}' ";
		$get_user = mysqli_query($connection, $query);
		
		while($row = mysqli_fetch_array($get_user)) {
			 $db_id = $row['id'];
			 $db_name = $row['username'];
			 $db_password = $row['password'];
		}
		
		if($username !== $db_name && $password !== $db_password) {
			//header( "refresh:3;url=login.php" );
			//echo "Username or Password Incorrect";
			//$message = "Username or Password Incorrect";
			header("Location: ../umpl/login.php");
			
			} else if($username == $db_name && $password == $db_password) {
			
				if (isset($_POST['rememberme'])) {
					setcookie('username', $_POST['username'], time()+60*60*24*365);
					setcookie('password', md5($_POST['password']), time()+60*60*24*365);
				} else {
					setcookie('username', $_POST['username'], false);
					setcookie('password', md5($_POST['password']), false);
				}
			
			$_SESSION['username'] = $db_name;
			
			header("Location: ../umpl/index.php");
			
		} else {
			header("Location: ../umpl/login.php");
		}
		
		} 
	
		 
	?>

      </div>
    </div>
  </div>
  

  
  
  
  

</body>

</html>
