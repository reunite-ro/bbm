<?php
include('session.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bridget Bakti Malaysia :Admin</title>
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
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
						
                    
                 
					                   
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Ahli Bridged Bakti Malaysia<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="form.html">Tambah Ahli</a>
                            </li>
                            <li>
                                <a href="table.html">Senarai Ahli</a>
                            </li>
                           <li>
                                <a href="#">Kegiatan Ahli<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Tambah Kegiatan</a>
                                    </li>
                                    <li>
                                        <a href="#">Senarai Kegiatan</a>
                                    </li>
                                    <li>
                                        <a href="#">Kegiatan Terakhir</a>
                                    </li>

                                </ul>
                               
                            </li>
                        
                        </ul>
                      </li>  
                         
                        <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Guru Pegawai Penasihat<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="form.html">Tambah Pegawai</a>
                            </li>
                            <li>
                                <a href="table.html">Senarai Pegawai</a>
                            </li>
                              <li>
                                <a href="#">Approval Pegawai</a>
                            </li>
                        
                        </ul>
                      </li>  
       <!--           <li  >
                        <a   href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	-->
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Maklumat Kegiatan Ahli</h2>   
                        <h5>Welcome Admin , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isikan maklumat kegiatan dibawah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   <h3>Maklumat Kegiatan Ahli</h3> 
                                    
                                        <form role="form"   action="add-kegiatan.php" method="post">
                                        <?php 


$noahli= $_GET['noahli'];

$result = mysql_query("SELECT * FROM ahli WHERE noahli=$noahli");


while($row = mysql_fetch_array($result))
  {
   
    echo"<label>No Ahli</label><br>";
    echo "<input class='form-control' disabled value='" . $row['noahli'] . "'>";
   
    echo"<label>Nama</label><br>";
    echo "<input class='form-control' disabled value='" . $row['nama'] . "'>";
                                    }
                                      mysql_close(); ?>  
                                    <input type="hidden" name="noahli"
value="<?php echo $_GET['noahli']; ?>">
                                       
                                        <div class="form-group">
                                            <label>Jenis Kegiatan</label>
                                            <input class="form-control" name="type"  />
                                        </div>
                                        <div class="form-group">
                                            <label>Tarikh</label>
                                            <input class="form-control" type="date" name="date"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Masa</label>
                                            <input class="form-control" type="time" name="time"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Aktiviti</label>
                                            <input class="form-control" name="aktiviti"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Tempat Aktiviti</label>
                                            <input class="form-control" name="tempat"/>
                                        </div>
                                     <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </form>
                                        
                                        
                                            
                                       
    </div>
                                
                        
                                          
                                       
                       
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
