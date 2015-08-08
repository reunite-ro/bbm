
<?php
include('session.php');
$noahli= $_GET['noahli'];
$result=mysql_query("UPDATE ahli SET lulusbendahari='LULUS' WHERE noahli='$noahli'");

header("Location: kelulusan-bendahari.php");
?>