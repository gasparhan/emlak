<?php
include_once "config.inc.php"; 
include_once "template.php";
top();
if(!$_POST['masterid']){
	echo "<script>alert('Geçerli bilgi girilmedi yada bos veri!\\nLütfen forma geri dönüp bilgileri kontrol ediniz!');location='javascript:history.back(-1)';</script>";
	exit;
}

$sql = mysql_query("select * from `adverts` where `masterid`='".$_POST['masterid']."'")or die(mysql_error());
$num = mysql_num_rows($sql);
?>
<form name="get" action="picture.php" method="post" style="margin:0;">
	<div class="divs">
		<p class="font_8g" style="width:400px; margin-bottom:5px;">Emlak numaras&#305; (&ouml;rnek : SK-123456) : </p>
		<input type="text" id="masterid" name="masterid" style="width:200px;" class="FormStyle">
		<input type="submit" style="width:75px;" value="Listele" id="listele" name="listele" class="ButtonStyle">
		<p class="font_8g" style="width:400px; margin-top:10px;">L&uuml;tfen resim düzenlemek istedi&#287;iniz ilan&#305;n emlak numaras&#305;n&#305; yaz&#305;n&#305;z...</p>
	</div>
</form>
<?
if($num == 0){
?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px; ">
<tr>
<td style="padding:25px; border:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/info.gif" width="48" height="48"><br /><br /><font class="font_8s"><?php echo $_POST['masterid'];?> emlak no ile herhangi bir kay&#305;t bulunamad&#305;<br />Lutfen dogru ilan numarasi girdiginizden emin olunuz!</font></td>
</tr>
</table>
<? }else{ 
		$sql = mysql_query("select * from `pictures` where `masterid`='".$_POST['masterid']."'")or die(mysql_error());
		$n = mysql_num_rows($sql);
		if($n ==0){
?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px; border:1px solid #ccc;">
<tr>
<td style="padding:25px; background-color:#f9f9f9;" align="center"><img src="images/icons/info.gif" width="48" height="48"><br /><br /><font class="font_8s">Bu ilana ait resim bulunamad&#305; !</font></td>
</tr>
<tr>
<td style="padding:5px; border-top:1px solid #ccc;" align="center">
<input type="button" name="yeni" value="Resim Ekle" style="width:98px;" class="ButtonStyle" onClick="javascript:location='picturea.php?masterid=<? echo $_POST['masterid'];?>';">
<input type="button" name="basa" value="Geri D&ouml;n" style="width:98px;" class="ButtonStyle"  onClick="javascript:location='javascript:histoy.back(-1)';">
</td>
</tr>
</table>
<? } else {?>
<table width="500" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;" >
  <tr>
    <td style="background-color:#f9f9f9;" align="center">
	<?
		while($row = mysql_fetch_array($sql)){
	?>
	<div style="float:left; padding:11px; text-align:center;">
		<img src="../images/pictures/small/<? echo $row['picture'];?>" width="100" height="76" style="border:1px solid #ccc; "><br />
		<input type="button" name="yeni" value="Resmi Sil" style="width:102px; background-color:#fff;" class="ButtonStyle" onClick="javascript:location='deletep.php?id=<? echo $row['id']."&picture=".$row['picture']."&masterid=".$_POST['masterid'];?>';">
	</div>
	<? } ?>
	</td>
  </tr>
  <tr>
  	<td style="text-align:center; padding:5px; border-top:1px solid #ccc;">
		<input type="button" name="yeni" value="Resim Ekle" style="width:98px;" class="ButtonStyle" onClick="javascript:location='picturea.php?masterid=<? echo $_POST['masterid'];?>';">
		<input type="button" name="basa" value="Geri Dön" style="width:98px;" class="ButtonStyle"  onClick="javascript:location='picture.php';">
	</td>
  </tr>
</table>
<? } } ?>
<? footer();?>