<?php
include('session.php');
?>

<?php




$sql="INSERT INTO kegiatan (activityid ,pegawaiid, noahli, date, time, type, aktiviti, tempat, tarikhmasuk)
VALUES
('','$login_session','$_POST[noahli]','$_POST[date]','$_POST[time]','$_POST[type]','$_POST[aktiviti]','$_POST[tempat]',CURDATE())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 
   
mysql_close($con);

header("Location:senarai-ahli.php");
?>


 
