
<?php
include('session.php');

$result=mysql_query("UPDATE admin SET password='$_POST[password]',nama='$_POST[nama]',ic='$_POST[ic]',email='$_POST[email]',facebook='$_POST[facebook]' WHERE username='$user_check'");

header("Location: info-admin.php");
?>