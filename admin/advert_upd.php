<?php
include_once "config.inc.php"; 
include_once "template.php";
top();
if(!$_POST['customer']){
	echo "<script>alert('Mal sahibi bilgisi eksik\nLütfen forma geri dönüp bilgileri kontrol ediniz!');location='javascript:history.back(-1)';</script>";
	exit;
}
//-------------------------------------
if($_POST['status'] == "Satildi" || $_POST['status'] == "Kiralandi"){
	$starih = "`s_tarih`='".mktime(0,0,0,date($_POST['say']),date($_POST['sgun']),date($_POST['syil']))."',";
}else{
	$starih = "";
}// end if ----------------------------
$sql = "update `adverts` set
`customer`='".$_POST['customer']."',
`b_tarih`='".mktime(0,0,0,date($_POST['bay']),date($_POST['bgun']),date($_POST['byil']))."',
".$starih."
`durum`='".$_POST['durum']."',
`emlak`='".$_POST['emlak']."',
`cesit`='".$_POST['cesit']."',
`sehir`='".$_POST['sehir']."',
`semt`='".$_POST['semt']."',
`mahalle`='".$_POST['mahalle']."',
`cadde`='".$_POST['cadde']."',
`a_bina`='".$_POST['a_bina']."',
`n_bina`='".$_POST['n_bina']."',
`katno`='".$_POST['katno']."',
`daire`='".$_POST['daire']."',
`tarif`='".$_POST['tarif']."',
`fiyat`='".$_POST['fiyat']."',
`birim`='".$_POST['birim']."',
`depozit`='".$_POST['depozit']."',
`aidat`='".$_POST['aidat']."',
`buyukluk`='".$_POST['buyukluk']."',
`o_sayi`='".$_POST['o_sayi']."',
`s_sayi`='".$_POST['s_sayi']."',
`b_sayi`='".$_POST['b_sayi']."',
`k_sayi`='".$_POST['k_sayi']."',
`yas`='".$_POST['yas']."',
`manzara`='".$_POST['manzara']."',
`havuz`='".$_POST['havuz']."',
`otopark`='".$_POST['otopark']."',
`isitma`='".$_POST['isitma']."',
`yakit`='".$_POST['yakit']."',
`asansor`='".$_POST['asansor']."',
`tv`='".$_POST['tv']."',
`detaylar`='".$_POST['detaylar']."',
`notlar`='".$_POST['notlar']."',
`status`='".$_POST['status']."' where `id`='".$_POST['id']."'";
$sql = mysql_query($sql)or die(mysql_error());


?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/apply.gif" width="48" height="48"><br><br><font class="font_8s">Bilgiler Ba&#351;ar&#305;yla G&uuml;ncellendi !</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="Yeni Ekle" class="ButtonStyle" style="width:98px;" onClick="javascript:location='adverta.php';">
<input type="button" name="basa" value="Ba&#351;a D&ouml;n" class="ButtonStyle" style="width:98px;" onClick="javascript:location='index.php';">
</td>
</tr>
</table>
<? footer();?>