<!DOCTYPE HTML>
<html>
<head>
<title>Administrator page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('gudang/admin/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('gudang/admin/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'/>
<!-- jQuery -->
<script src="<?php echo base_url('gudang/admin/js/jquery.min.js'); ?>"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--link text editor-->
<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<!---//webfonts-->  
<!-- Nav CSS -->
<link href="<?php echo base_url('gudang/admin/css/custom.css'); ?>" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('gudang/admin/js/metisMenu.min.js'); ?>"></script>
<script src="<?php echo base_url('gudang/admin/js/custom.js'); ?>"></script>
<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 220px;
}
</style>
<script type="text/javascript">
var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;

var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome, <?php echo $username;?></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?php echo base_url('gudang/admin/images/1.png'); ?>"></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="<?php echo base_url("login/keluar");?>"><i class="fa fa-power-off"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url('Admin/index');?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('Admin/tips');?>"><i class="fa fa-book nav_icon"></i>tips</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/Admin/obat');?>"><i class="fa fa-archive nav_icon"></i>obat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Admin/dokterku');?>"><i class="fa fa-user-md nav_icon"></i>dokterku</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Admin/quote');?>"><i class="fa fa-comments-o nav_icon"></i>quote</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Admin/darurat');?>"><i class="fa fa-ambulance nav_icon"></i>Darurat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Hasil data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('Admin/tabel'); ?>"><i class="fa fa-table nav_icon"></i>Tabel</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('Admin/pengguna'); ?>"><i class="fa fa-user nav_icon"></i>User</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url("login/keluar");?>"><i class="fa fa-power-off nav_icon"></i>sign out</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
    <div class="content_bottom">
     <div class="col-md-12 span_3" style="height: 450px;">
        <div align="center" class="tengah">
                <center> <h4><div id="clockbox"></div></h4></center><br/>
                <marquee title="Pesan"> Welcome to Antibiotikcom admin page</marquee>
            </div>
    </div>
        <div class="clearfix"> </div>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2017. All Rights Reserved | Design by TelDevTeam </p>
        </div>
        </div>
       </div>
      <!-- /#page-wrapper -->

</div>
	      <!-- map -->

       </div>
       <div class="clearfix"> </div>
    </div>
   
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('gudang/admin/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
    