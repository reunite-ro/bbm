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
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
font-size: 16px;"><a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                                <a href="#">Kegiatan Ahli</a>
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
                     <h2>Senarai Kegiatan</h2>   
                        <h5>Welcome <?php echo $user_check; ?> , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Senarai Kegiatan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                               <?php

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);

$result = mysql_query("SELECT * FROM kegiatan");

                                echo"<table class='table table-striped table-bordered table-hover'>
                                    <thead>
                                        <tr>
                                            <th>Edit</th>
                                            <th>No Ahli</th>
                                            <th>Pegawai ID</th>
                                             <th>Jenis Kegiatan</th>
                                              <th>Tarikh</th>
                                            <th>Masa</th>
                                            <th>Aktiviti</th>
                                            <th>Tempat Aktiviti</th>
                                            <th>Tarikh Masuk Data</th>
                                             
                                        </tr>
                                    </thead>";
                                    
                                        while($row = mysql_fetch_array($result))
  {
                                            echo "<tbody>";
                                        echo "<tr>";
echo "<td><a href=\"vieweditkegiatan.php?activityid=$row[activityid]\">" . $row['activityid'] . "</td>";
 echo "<td><a href=\"viewahli.php?noahli=$row[noahli]\">" . $row['noahli'] . "</td>";
echo "<td><a href=\"viewpegawai.php?pegawaiid=$row[pegawaiid]\">" . $row['pegawaiid'] . "</td>";
                                            
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['aktiviti'] . "</td>";
  echo "<td>" . $row['tempat'] . "</td>";
echo "<td>" . $row['tarikhmasuk'] . "</td>";

                                            echo "</tr>";

                                    echo"</tbody>";
                                        }
                               echo"</table>";
                                        mysql_close($con);
?>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
               
                <d
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
