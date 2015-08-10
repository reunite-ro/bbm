
<?php
include('session.php');
$noahli= $_GET['noahli'];
$result=mysql_query("UPDATE ahli SET expire=DATE_ADD(CURDATE(), INTERVAL 1 YEAR) WHERE noahli='$noahli'");

header("Location: senarai-yuran.php");
?>