
<?php
include('session.php');


$sql="INSERT INTO ahli (noahli, pegawaiid, nama, ic, umur, notel, jawatanbbm, alamat, poskod, email, facebook, kegemaran, pantang, pasangan, jawatankerja, namamajikan, alamatmajikan, poskodmajikan, namapenjaga, notelpenjaga, icpenjaga, sekolahmenengah, daerahmenengah, negerimenengah, tahunspm, sekolahrendah, taman, daerahtaman, negeritaman, darjahtingkatan, pangkatsekolah, iptterakhir, cawangan, pengajian, pengajiandahulu, tahunsemester, pangkatipt, gurubesar, catatankhas, tarikhterima, lulustolak, tarikhsetuju, namaunit, tarikhpindah, sebabmasuk, tarikhmohon, lulusbendahari)
VALUES
('','$login_session','$_POST[nama]','$_POST[ic]','$_POST[umur]','$_POST[notel]','$_POST[jawatanbbm]','$_POST[alamat]','$_POST[poskod]','$_POST[email]','$_POST[facebook]','$_POST[kegemaran]','$_POST[pantang]','$_POST[pasangan]','$_POST[jawatankerja]','$_POST[namamajikan]','$_POST[alamatmajikan]','$_POST[poskodmajikan]','$_POST[namapenjaga]','$_POST[notelpenjaga]','$_POST[icpenjaga]','$_POST[sekolahmenengah]','$_POST[daerahmenengah]','$_POST[negerimenengah]','$_POST[tahunspm]','$_POST[sekolahrendah]','$_POST[taman]','$_POST[daerahtaman]','$_POST[negeritaman]','$_POST[darjahtingkatan]','$_POST[pangkatsekolah]','$_POST[iptterakhir]','$_POST[cawangan]','$_POST[pengajian]','$_POST[pengajiandahulu]','$_POST[tahunsemester]','$_POST[pangkatipt]','$_POST[gurubesar]','$_POST[catatankhas]',CURDATE(),'PENDING','$_POST[tarikhsetuju]','$_POST[namaunit]',CURDATE(),'$_POST[sebabmasuk]','$_POST[tarikhmohon]','PENDING')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 
   
mysql_close($con);

header("Location:senarai-ahli.php");
?>


 