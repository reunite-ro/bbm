
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
                                        <a href="form-kegiatan.html">Tambah Kegiatan</a>
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
                                <a href="form-pegawai.html">Tambah Pegawai</a>
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
                     <h2>Maklumat Ahli</h2>   
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
                            Isikan maklumat bridged bakti malaysia dibawah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <h3>Maklumat Ahli</h3> 
                                          <form action="maklumat-lengkap2.php" method="post">
                                           <div class="form-group">
                                        
                                         <select id="noahli" name="noahli">
        
            <?php
            
            $mysqlserver="localhost";
            $mysqlusername="root";
            $mysqlpassword="root";
            $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'bbm';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT noahli,nama FROM ahli ORDER BY noahli;";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from BBM failed: ".mysql_error());
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $noahli=$cdrow["noahli"];
                $nama=$cdrow["nama"];
                
              
                echo "<option>
                    $noahli
                </option>";
            
            }
                
            ?>
    
        </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        </form>
                                        
                                        
                                     
                                        
                                   <form role="form">
                                       <div class="form-group">
                                            <label>No Ahli</label>
                                            <input class="form-control" disabled />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                         <form role="form">
                                        <div class="form-group">
                                            <label>No IC/Surat Beranak</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jawatan dalam BBM</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Poskod</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Kegemaran</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Pantang/Alergi</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Suami/Isteri</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <h3>Pekerjaan</h3> 
                                        <div class="form-group">
                                            <label>Jawatan/Pekerjaan</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Majikan</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Majikan</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Poskod</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <h3>Maklumat Penjaga</h3> 
                                        <div class="form-group">
                                            <label>Nama Ibubapa/Penjaga</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telefon</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>No KP Ibubapa/Penjaga</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        
                                            
                                       
    </div>
                                
                                <div class="col-md-6">
                                    <h3>Pendidikan</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama Sekolah Menengah</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                            <div class="form-group">
                                            <label>Daerah</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                           <div class="form-group">
                                            <label>Negeri</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                          <div class="form-group">
                                            <label>Tahun SPM</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah Rendah</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Taman/Kariah/Desa</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Daerah</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Negeri</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Darjah/Tingkatan</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat Disekolah</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama IPT Terakhir</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cawangan</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Pengajian</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Pengajian Terdahulu</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun/Semester Pada Tarikh Permohonan</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat/Kegiatan dalam IPT</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Guru Besar/Pengetua</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        <h3>Lain-lain</h3>
                                          <div class="form-group">
                                            <label>Catatan Khas Pemohon</label>
                                            <input class="form-control" disabled/>
                                        </div>
                                        
                                        
                                    </form> 
                       
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
