<?php
require('db.php');
$msg="";
if(isset($_POST['email']) && isset($_POST['password'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$res=mysqli_query($con,"select * from employee where email='$email' and password='$password'");
	$count=mysqli_num_rows($res);
	if($count>0){
        echo "yes";
	}else{
		$msg="Please enter correct login details";
	}
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="src/css/normalize.css">
      <link rel="stylesheet" href="src/css/bootstrap.min.css">
      <link rel="stylesheet" href="src/css/font-awesome.min.css">
      <link rel="stylesheet" href="src/css/themify-icons.css">
      <link rel="stylesheet" href="src/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="src/css/flag-icon.min.css">
      <link rel="stylesheet" href="src/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="src/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="post">
                     <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                     </div>
                     <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					 <div class="result_msg"></div>
					</form>
               </div>
            </div>
         </div>
      </div>
      <script src="src/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="src/js/popper.min.js" type="text/javascript"></script>
      <script src="src/js/plugins.js" type="text/javascript"></script>
      <script src="src/js/main.js" type="text/javascript"></script>
   </body>
</html>