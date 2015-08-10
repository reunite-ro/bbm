
<?php
include('session.php');


$result=mysql_query("UPDATE kegiatan SET date='$_POST[date]',time='$_POST[time]',type='$_POST[type]',aktiviti='$_POST[aktiviti]',tempat='$_POST[tempat]',tarikhmasuk=CURDATE() WHERE activityid=$_POST[activityid]");

header("Location: edit-kegiatan.php"); 
?>   
