<?php
include('session.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bridged Bakti Malaysia :Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
						
                    
                 
					                   
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Ahli Bridged Bakti Malaysia<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="senarai-ahli.php">Senarai Ahli</a>
                            </li>
                           <li>
                                <a href="edit-ahli.php">Edit Ahli</a>
                            </li>
                            <li>
                                <a href="kelulusan-bendahari.php">Kelulusan Bendahari Negeri</a>
                            </li>
                        
                        
                        
                        </ul>
                      </li>  
                       <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Kegiatan Ahli<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="senarai-kegiatan.php">Senarai Kegiatan</a>
                            </li>
                             <li>
                                <a href="edit-kegiatan.php">Edit Kegiatan</a>
                            </li>
                            <li>
                                <a href="kegiatan-terakhir.php">Kegiatan Terakhir</a>
                            </li>
                           
                        
                        
                        
                        </ul>
                      </li>  
                        <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Guru Pegawai Penasihat<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="senarai-pegawai.php">Senarai Pegawai</a>
                            </li>
                           <li>
                                <a href="form-pegawai.php">Tambah Pegawai</a>
                            </li>
                         <li>
                                <a href="edit-pegawai.php">Edit Pegawai</a>
                            </li>
                        </ul>
                      </li>  
                         <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="info-admin.php">Info Admin</a>
                            </li>
                           <li>
                                <a href="edit-info.php">Edit Info</a>
                            </li>
                       
                        </ul>
                      </li> 
    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome <?php echo $user_check; ?>, Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);

$result = mysql_query("SELECT * FROM ahli ") or die(mysql_error());
   $num_rows = mysql_num_rows($result);
echo "<p class='main-text'>" . $num_rows . "</p>";
?>
                    
                    <p class="text-muted"><a href="senarai-ahli.php">Ahli</a></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);

$result2 = mysql_query("SELECT * FROM ahli WHERE lulustolak='PENDING'") or die(mysql_error());
   $num_rows = mysql_num_rows($result2);
echo "<p class='main-text'>" . $num_rows . "</p>";
?>
                   
                    <p class="text-muted"><a href="ahli-pending.php">Pending</a></p>
                </div>
             </div>
		     </div>
                                       <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);

$result2 = mysql_query("SELECT * FROM ahli WHERE lulusbendahari='LULUS'") or die(mysql_error());
   $num_rows = mysql_num_rows($result2);
echo "<p class='main-text'>" . $num_rows . "</p>";
?>
                   
                    <p class="text-muted"><a href="ahli-lulus.php">Lulus</a></p>
                </div>
             </div>
		     </div>
                                                          <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);

$result2 = mysql_query("SELECT * FROM pegawai") or die(mysql_error());
   $num_rows = mysql_num_rows($result2);
echo "<p class='main-text'>" . $num_rows . "</p>";
?>
                   
                    <p class="text-muted"><a href="senarai-pegawai.php">Pegawai</a></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-list"></i>
                </span>
                <div class="text-box" >
                   <?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);

$result3 = mysql_query("SELECT * FROM kegiatan") or die(mysql_error());
   $num_rows = mysql_num_rows($result3);
echo "<p class='main-text'>" . $num_rows . "</p>";
?>
                    <p class="text-muted"><a href="senarai-kegiatan.php">Kegiatan</a></p>
                </div>
             </div>
		     </div>
    
			</div>
                 <!-- /. ROW  -->
                <hr />                
              
                
                         
                    
                      
                 
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
