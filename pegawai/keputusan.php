
<?php
include('session.php');


$result=mysql_query("UPDATE ahli SET lulustolak='$_POST[lulustolak]',sebab='$_POST[sebab]',tarikhlulustolak=CURDATE() WHERE noahli=$_POST[noahli]");

 header("Location: approve-ahli.php");
?>   
