
<?php
include('session.php');

$result=mysql_query("UPDATE pegawai SET password='$_POST[password]',nama='$_POST[nama]',ic='$_POST[ic]',email='$_POST[email]',facebook='$_POST[facebook]',alamat='$_POST[alamat]',poskod='$_POST[poskod]',daerah='$_POST[daerah]',negeri='$_POST[negeri]' WHERE username='$user_check'");

header("Location: info-pegawai.php");
?>