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
                            Berikut merupakan maklumat ahli Bridget Bakti Malaysia
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <h3>Maklumat Ahli</h3> 





<?php
//including the database connection file



//getting id of the data from url
$noahli= $_GET['noahli'];

$result = mysql_query("SELECT * FROM ahli WHERE noahli=$_GET[noahli] && pegawaiid='$login_session'");
  


while($row = mysql_fetch_array($result))
  {
    echo"<form action='update-ahli.php' method='post'>";
    echo"<label>No Ahli</label><br>";
    echo "<input class='form-control'  name='noahli' value='" . $row['noahli'] . "'>";
    
    echo"<label>Nama</label>";
    echo "<input class='form-control'   name='nama' value='" . $row['nama'] . "'>";
    echo"<label>No IC/Surat Beranak</label><br>";
    echo "<input class='form-control'   name='ic'  value='" . $row['ic'] . "'>";
    echo"<label>Umur</label>";
    echo "<input class='form-control'    name='umur' value='" . $row['umur'] . "'>";
    echo"<label>No Telefon</label><br>";
    echo "<input class='form-control'    name='notel' value='" . $row['notel'] . "'>";
    echo"<label>Jawatan Dalam BBM</label>";
    echo "<input class='form-control'    name='jawatanbbm' value='" . $row['jawatanbbm'] . "'>";
    echo"<label>Alamat</label><br>";
    echo "<input class='form-control'   name='alamat'  value='" . $row['alamat'] . "'>";
    echo"<label>Poskod</label>";
    echo "<input class='form-control'   name='poskod'  value='" . $row['poskod'] . "'>";
    echo"<label>Email</label><br>";
    echo "<input class='form-control'   name='email'  value='" . $row['email'] . "'>";
    echo"<label>Facebook</label>";
    echo "<input class='form-control'   name='facebook'  value='" . $row['facebook'] . "'>";
    echo"<label>Kegemaran</label><br>";
    echo "<input class='form-control'    name='kegemaran' value='" . $row['kegemaran'] . "'>";
    echo"<label>Pantang/Alergi</label>";
    echo "<input class='form-control'   name='pantang'  value='" . $row['pantang'] . "'>";
    echo"<label>Nama Suami/Isteri</label><br>";
    echo "<input class='form-control'  name='pasangan'   value='" . $row['pasangan'] . "'>";
    echo "<h3>Pekerjaan</h3>";
    echo"<label>Jawatan/Pekerjaan</label>";
    echo "<input class='form-control'   name='jawatankerja'  value='" . $row['jawatankerja'] . "'>";
    echo"<label>Nama Majikan</label><br>";
    echo "<input class='form-control'   name='namamajikan'  value='" . $row['namamajikan'] . "'>";
    echo"<label>Alamat Majikan</label>";
    echo "<input class='form-control'  name='alamatmajikan'   value='" . $row['alamatmajikan'] . "'>";
    echo"<label>Poskod</label>";
    echo "<input class='form-control'   name='poskodmajikan'  value='" . $row['poskodmajikan'] . "'>";
    echo "<h3>Maklumat Penjaga</h3>";
    echo"<label>Nama Ibubapa/Penjaga</label><br>";
    echo "<input class='form-control'   name='namapenjaga'  value='" . $row['namapenjaga'] . "'>";
    echo"<label>No Telefon</label>";
    echo "<input class='form-control'   name='notelpenjaga'  value='" . $row['notelpenjaga'] . "'>";
    echo"<label>No KP Ibubapa/Penjaga</label>";
    echo "<input class='form-control'  name='icpenjaga'  value='" . $row['icpenjaga'] . "'>";
    echo "<h3>Catatan Khas</h3>";
    echo"<label>Catatan Khas Pemohon</label>";
    echo "<input class='form-control'  name='catatankhas'   value='" . $row['catatankhas'] . "'>";
    echo"</div>";
    echo"<div class='col-md-6'>";
    echo"<h3>Pendidikan</h3>";
    echo"<label>Nama Sekolah Menengah</label><br>";
    echo "<input class='form-control'   name='sekolahmenengah'  value='" . $row['sekolahmenengah'] . "'>";
    echo"<label>Daerah</label>";
    echo "<input class='form-control'   name='daerahmenengah'  value='" . $row['daerahmenengah'] . "'>";
    echo"<label>Negeri</label><br>";
    echo "<input class='form-control'   name='negerimenengah'  value='" . $row['negerimenengah'] . "'>";
    echo"<label>Tahun SPM</label>";
    echo "<input class='form-control'   name='tahunspm'  value='" . $row['tahunspm'] . "'>";
    echo"<label>Nama Sekolah Rendah</label><br>";
    echo "<input class='form-control'    name='sekolahrendah' value='" . $row['sekolahrendah'] . "'>";
    echo"<label>Nama Taman/Kariah/Desa</label>";
    echo "<input class='form-control'   name='taman'  value='" . $row['taman'] . "'>";
    echo"<label>Daerah</label><br>";
    echo "<input class='form-control'   name='daerahtaman'  value='" . $row['daerahtaman'] . "'>";
    echo"<label>Negeri</label>";
    echo "<input class='form-control'    name='negeritaman' value='" . $row['negeritaman'] . "'>";
    echo"<label>Darjah/Tingkatan</label><br>";
    echo "<input class='form-control'   name='darjahtingkatan'  value='" . $row['darjahtingkatan'] . "'>";
    echo"<label>Pangkat Disekolah</label>";
    echo "<input class='form-control'   name='pangkatsekolah'  value='" . $row['pangkatsekolah'] . "'>";
    echo"<label>Nama IPT Terakhir</label><br>";
    echo "<input class='form-control'   name='iptterakhir'  value='" . $row['iptterakhir'] . "'>";
    echo"<label>Cawangan</label>";
    echo "<input class='form-control'   name='cawangan'  value='" . $row['cawangan'] . "'>";
    echo"<label>Bidang Pengajian</label><br>";
    echo "<input class='form-control'  name='pengajian'   value='" . $row['pengajian'] . "'>";
    echo"<label>Bidang Pengajian Terdahulu</label>";
    echo "<input class='form-control'   name='pengajiandahulu'  value='" . $row['pengajiandahulu'] . "'>";
    echo"<label>Tahun/Semester Pada Tarikh Permohonan</label><br>";
    echo "<input class='form-control'   name='tahunsemester'  value='" . $row['tahunsemester'] . "'>";
    echo"<label>Pangkat/Kegiatan dalam IPT</label>";
    echo "<input class='form-control'   name='pangkatipt'  value='" . $row['pangkatipt'] . "'>";
    echo"<label>Nama Guru Besar/Pengetua</label>";
    echo "<input class='form-control'   name='gurubesar'  value='" . $row['gurubesar'] . "'>";
    echo "<h3>Lain-lain</h3>";
    echo"<label>Sebab Masuk BBM</label><br>";
    echo "<input class='form-control'   name='sebabmasuk'  value='" . $row['sebabmasuk'] . "'>";
    echo"<label>Tarikh Permohonan</label>";
    echo "<input class='form-control'   name='tarikhmohon'  type='date' value='" . $row['tarikhmohon'] . "'>";
    echo"<label>Tarikh Persetujuan</label>";
    echo "<input class='form-control'  name='tarikhsetuju' type='date'  value='" . $row['tarikhsetuju'] . "'>";
    echo "<h3>Catatan Khas</h3>";
    echo"<label>Catatan Khas Pemohon</label>";
    echo "<input class='form-control'   name='catatankhas'  value='" . $row['catatankhas'] . "'>";
     echo"<br><button type='submit' class='btn btn-default'>Submit</button>";
   
    
    
  
}
                                      mysql_close(); ?>      
                                        
                                   
                                         
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
