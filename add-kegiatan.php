<!--<?php
include('session.php');
?>
-->
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bbm", $con);



$sql="INSERT INTO kegiatan (activityid, noahli, date, time, type, aktiviti, tempat, tarikhmasuk)
VALUES
('','$_POST[noahli]','$_POST[date]','$_POST[time]','$_POST[type]','$_POST[aktiviti]','$_POST[tempat]',CURDATE())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 
   
mysql_close($con);

header("Location:senarai-ahli.php");
?>


 
