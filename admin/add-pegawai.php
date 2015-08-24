
<?php
include('session.php');


$sql="INSERT INTO pegawai (pegawaiid, nama, ic, alamat, poskod, daerah, negeri, email, facebook, username, password)
VALUES
('','$_POST[nama]','$_POST[ic]','$_POST[alamat]','$_POST[poskod]','$_POST[daerah]','$_POST[negeri]','$_POST[email]','$_POST[facebook]','$_POST[username]','$_POST[password]')";


if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
 
   
mysql_close();

header("Location:senarai-pegawai.php");
?>


 