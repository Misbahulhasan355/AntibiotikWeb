
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('gudang/admin/css/bootstrap.min.css'
); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('gudang/admin/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('gudang/admin/css/font-awesome.css'); ?>" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url('gudang/admin/js/jquery.min.js'); ?>"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts-->  
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('gudang/admin/js/bootstrap.min.js'); ?>"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="#"><img src="<?php echo base_url('gudang/admin/images/logo.png'); ?>" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form action="<?php echo base_url("login/masuk"); ?>" method="post">
		<input type="text" class="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<div class="submit">
      <input type="submit" value="login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2017. All Rights Reserved | Design by TelDevTeam</a> </p>
   </div>
</body>
</html>
