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
                <a class="navbar-brand" href="dashboard.php">Pegawai</a> 
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
                                <a href="form-ahli.php">Tambah Ahli</a>
                            </li>
                           <li>
                                <a href="edit-ahli.php">Edit Ahli</a>
                            </li>
                            <li>
                                <a href="approve-ahli.php">Approve Ahli</a>
                            </li>
                        
                        
                        
                        </ul>
                      </li>  
                      					                   
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Pembaharuan Yuran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="senarai-yuran.php">Senarai Yuran Ahli</a>
                            </li>
                            <li>
                                <a href="tertunggak-muda-remaja.php">Tertunggak Muda/Remaja</a>
                            </li>
                           <li>
                                <a href="tertunggak-ipt-dewasa.php">Tertunggak IPT/Dewasa</a>
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
                                <a href="info-pegawai.php">Info Pegawai</a>
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
                     <h2>Pegawai Dashboard</h2>   
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
                            Isikan maklumat bridged bakti malaysia dibawah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <h3>Maklumat Ahli</h3> 
                                    <form role="form" action="add-ahli.php" method="post">
                                    
                                            <label>Pendaftaran</label>
                                           <select class="form-control" name="jenisdaftar">
  <option value="muda" >Keahlian Muda/Remaja (RM2)</option>
  <option value="ipt" >Keahlian IPT/Dewasa (RM5)</option>
</select>
                                       
                                            <label>Nama</label>
                                            <input class="form-control" name="nama"/>
                                       

                                     
                                            <label>No IC/Surat Beranak</label>
                                            <input class="form-control" name="ic"/>
                                        
                                       
                                            <label>Umur</label>
                                            <input class="form-control" name="umur"/>
                                       
                                     
                                            <label>No Telefon</label>
                                            <input class="form-control" name="notel"/>
                                        
                                            <label>Jawatan dalam BBM</label>
                                            <input class="form-control" name="jawatanbbm"/>
                                       
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat"/>
                                        
                                            <label>Poskod</label>
                                            <input class="form-control" name="poskod"/>
                                       
                                            <label>Email</label>
                                            <input class="form-control" name="email"/>
                                        
                                            <label>Facebook</label>
                                            <input class="form-control" name="facebook"/>
                                       
                                            <label>Kegemaran</label>
                                            <input class="form-control" name="kegemaran"/>
                                      
                                       
                                            <label>Pantang/Alergi</label>
                                            <input class="form-control" name="pantang"/>
                                        
                                            <label>Nama Suami/Isteri</label>
                                            <input class="form-control" name="pasangan"/>
                                       
                                        <h3>Pekerjaan</h3> 
                                        
                                            <label>Jawatan/Pekerjaan</label>
                                            <input class="form-control" name="jawatankerja"/>
                                       
                                            <label>Nama Majikan</label>
                                            <input class="form-control" name="namamajikan"/>
                                       
                                            <label>Alamat Majikan</label>
                                            <input class="form-control" name="alamatmajikan"/>
                                       
                                            <label>Poskod</label>
                                            <input class="form-control" name="poskodmajikan"/>
                                        
                                        <h3>Maklumat Penjaga</h3> 
                                        
                                            <label>Nama Ibubapa/Penjaga</label>
                                            <input class="form-control" name="namapenjaga"/>
                                       
                                            <label>No Telefon</label>
                                            <input class="form-control" name="notelpenjaga"/>
                                        
                                            <label>No KP Ibubapa/Penjaga</label>
                                            <input class="form-control" name="icpenjaga"/>
                                        
                                         <h3>Catatan Khas</h3>
                                          
                                            <label>Catatan Khas Pemohon</label>
                                            <input class="form-control" name="catatankhas"/>
                                        
                                            
                                       
    </div>
                                
                                <div class="col-md-6">
                                    <h3>Pendidikan</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama Sekolah Menengah</label>
                                            <input class="form-control" name="sekolahmenengah"/>
                                        </div>
                                            <div class="form-group">
                                            <label>Daerah</label>
                                            <input class="form-control" name="daerahmenengah"/>
                                        </div>
                                           <div class="form-group">
                                            <label>Negeri</label>
                                            <input class="form-control" name="negerimenengah"/>
                                        </div>
                                          <div class="form-group">
                                            <label>Tahun SPM</label>
                                            <input class="form-control" name="tahunspm"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah Rendah</label>
                                            <input class="form-control" name="sekolahrendah"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Taman/Kariah/Desa</label>
                                            <input class="form-control" name="taman"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Daerah</label>
                                            <input class="form-control" name="daerahtaman"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Negeri</label>
                                            <input class="form-control" name="negeritaman"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Darjah/Tingkatan</label>
                                            <input class="form-control" name="darjahtingkatan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat Disekolah</label>
                                            <input class="form-control" name="pangkatsekolah"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama IPT Terakhir</label>
                                            <input class="form-control" name="iptterakhir"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cawangan</label>
                                            <input class="form-control" name="cawangan"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Pengajian</label>
                                            <input class="form-control" name="pengajian"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Pengajian Terdahulu</label>
                                            <input class="form-control" name="pengajiandahulu"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun/Semester Pada Tarikh Permohonan</label>
                                            <input class="form-control" name="tahunsemester"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat/Kegiatan dalam IPT</label>
                                            <input class="form-control" name="pangkatipt"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Guru Besar/Pengetua</label>
                                            <input class="form-control" name="gurubesar"/>
                                        </div>
                                        <h3>Lain-lain</h3>
                                        <div class="form-group">
                                            <label>Sebab Masuk BBM</label>
                                            <input class="form-control" name="sebabmasuk"/>
                                               </div>
                                               <div class="form-group">
                                            <label>Nama Unit</label>
                                            <input class="form-control" name="namaunit"/>
                                               </div>
                                            <div class="form-group">
                                            <label>Tarikh Permohonan</label>
                                            <input class="form-control" name="tarikhmohon" type="date"/>
                                               </div>
                                         <div class="form-group">
                                            <label>Tarikh Persetujuan</label>
                                            <input class="form-control" name="tarikhsetuju" type="date"/>
                                     
                                                </div>
                                      
                                        
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
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
