
<?php
include('session.php');


$sql="INSERT INTO admin (adminid, nama, ic, email, facebook, username, password)
VALUES
('','$_POST[nama]','$_POST[ic]','$_POST[email]','$_POST[facebook]','$_POST[username]','$_POST[password]')";


if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
 
   
mysql_close();

header("Location:dashboard.php");
?>


 