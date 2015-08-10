
<?php
include('session.php');


$result=mysql_query("UPDATE ahli SET nama='$_POST[nama]',ic='$_POST[ic]',umur='$_POST[umur],notel='$_POST[notel],jawatanbbm='$_POST[jawatanbbm],alamat='$_POST[alamat]','poskod='$_POST[poskod]',email='$_POST[email]',facebook='$_POST[facebook]',kegemaran='$_POST[kegemaran]',pantang='$_POST[pantang]',pasangan='$_POST[pasangan],jawatankerja='$_POST[jawatankerja],namamajikan='$_POST[namamajikan],alamatmajikan='$_POST[alamatmajikan],poskodmajikan='$_POST[poskodmajikan],namapenjaga='$_POST[namapenjaga],notelpenjaga='$_POST[notelpenjaga],icpenjaga='$_POST[icpenjaga],sekolahmenengah='$_POST[sekolahmenengah],daerahmenengah='$_POST[daerahmenengah],negerimenengah='$_POST[negerimenengah],tahunspm='$_POST[tahunspm],sekolahrendah='$_POST[sekolahrendah],taman='$_POST[taman],daerahtaman='$_POST[daerahtaman],negeritaman='$_POST[negeritaman],darjahtingkatan='$_POST[darjahtingkatan],pangkatsekolah='$_POST[pangkatsekolah],iptterakhir='$_POST[iptterakhir],cawangan='$_POST[cawangan],pengajian='$_POST[pengajian],pengajiandahulu='$_POST[pengajiandahulu],tahunsemester='$_POST[tahunsemester],pangkapipt='$_POST[pangkatipt],gurubesar='$_POST[gurubesar],catatankhas='$_POST[catatankhas],sebabmasuk='$_POST[sebabmasuk],tarikhmohon='$_POST[tarikhmohon],tarikhsetuju='$_POST[tarikhsetuju] WHERE noahli=$_POST[noahli]");

header("Location: edit-ahli.php"); 
?>   
