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
                        <a href="#"><i class="fa fa-edit fa-3x"></i>Pembaharuan Yuran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="senarai-yuran.php">Senarai Yuran</a>
                            </li>
                            <li>
                                <a href="tertunggak-muda-remaja.php">Tertunggak Ahli Muda/Remaja</a>
                            </li>
                            
                            <li>
                                <a href="tertunggak-ipt-dewasa.php">Tertunggak Ahli IPT/Dewasa</a>
                            </li>
                                                        <li>
                                <a href="blank.html">Yuran Seumur Hidup</a>
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
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Berikut merupakan maklumat ahli Bridged Bakti Malaysia
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <h3>Maklumat Pegawai Penasihat</h3> 





<?php
//including the database connection file



//getting id of the data from url
$pegawaiid= $_GET['pegawaiid'];

$result = mysql_query("SELECT * FROM pegawai WHERE pegawaiid=$_GET[pegawaiid]");
  


while($row = mysql_fetch_array($result))
  {
    echo"<label>Nama</label><br>";
    echo "<input class='form-control' disabled value='" . $row['nama'] . "'>";
   echo"<label>No Kad Pengenalan</label><br>";
    echo "<input class='form-control' disabled value='" . $row['ic'] . "'>";
    echo"<label>Alamat</label>";
    echo "<input class='form-control' disabled value='" . $row['alamat'] . "'>";
    echo"<label>Poskod</label><br>";
    echo "<input class='form-control' disabled value='" . $row['poskod'] . "'>";
    echo"<label>Daerah</label>";
    echo "<input class='form-control' disabled value='" . $row['daerah'] . "'>";
     echo"<label>Negeri</label>";
    echo "<input class='form-control' disabled value='" . $row['negeri'] . "'>";
    echo"<label>Email</label><br>";
    echo "<input class='form-control' disabled value='" . $row['email'] . "'>";
    echo"<label>Facebook</label>";
    echo "<input class='form-control' disabled value='" . $row['facebook'] . "'>";
echo"</div>";
    echo"<div class='col-md-6'>";
    echo"<h3>Login Info</h3>";
   echo"<label>Username</label><br>";
    echo "<input class='form-control' disabled value='" . $row['username'] . "'>";
   echo"<label>Password</label><br>";
    echo "<input class='form-control' type='password' disabled value='" . $row['password'] . "'>";
    
    
  
}
                                      mysql_close(); ?>      
                                        
                                   
                                         
                       
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>Akan Datang</h3>
                         <p>
                        Ruangan ini adalah untuk kegunaan akan datang Bridged Bakti Malaysia.
                        </p>
                    </div>
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
