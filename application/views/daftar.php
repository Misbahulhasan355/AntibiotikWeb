<!DOCTYPE HTML>
<html>
<head>
<title>Daftar Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('gudang/admin/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
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
  <h2 class="form-heading">Daftar</h2>
  <form class="form-signin app-cam" action="<?php echo base_url('daftar/tambah_akun');?>" method="post">
      <input type="text" class="form-control1" name="username" placeholder="username">
      <input type="text" class="form-control1" name="email" placeholder="email">
      <input type="password" class="form-control1" name="password" placeholder="password">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit" value="daftar">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="<?php echo base_url('login'); ?>">
              Login
          </a>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy; 2017. All Rights Reserved | Design by TelDevTeam</p>
   </div>
</body>
</html>
