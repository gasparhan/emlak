<?php
include "template.php";
include "config.inc.php";
top();

$get = $_GET['get'];
if($get == "date"){
	$d = $_POST['bd'];
	$m = $_POST['bm'];
	$y = $_POST['by'];

	$dat = mktime(0,0,0,$m,$d,$y);
	$sql = mysql_query("select * from `adverts` where `b_tarih`='".$dat."'")or die(mysql_error());
}
if($get == "estate"){
	$sql = mysql_query("select * from `adverts` where `masterid`='".$_POST['masterid']."'")or die(mysql_error());
}
if($get == "owner"){
	$ss = mysql_query("select * from `customers` where `name` like '%".$_POST['masterid']."%'")or die(mysql_error());
	$rs = mysql_fetch_array($ss);
	$sql = mysql_query("select * from `adverts` where `customer` = '".$rs['id']."'")or die(mysql_error());
}
if($get == "all"){
	$sql = mysql_query("select * from `adverts`")or die(mysql_error());
}
if($get == "sales"){
	$sql = mysql_query("select * from `adverts` where `durum`='Satilik'")or die(mysql_error());
}
if($get == "rents"){
	$sql = mysql_query("select * from `adverts` where `durum`='Kiralik'")or die(mysql_error());
}
if($get == "sold"){
	$sql = mysql_query("select * from `adverts` where `status`='Satildi' or `status`='Kiralandi'")or die(mysql_error());
}
if($get == "wait"){
	$sql = mysql_query("select * from `adverts` where `status`='Beklemede'")or die(mysql_error());
}
if($get == "cancel"){
	$sql = mysql_query("select * from `adverts` where `status`='iptal'")or die(mysql_error());
}
$num = mysql_num_rows($sql);
if($num>0){
?>
<table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #ccc; background-color:#f9f9f9; border-bottom:0;">
<?
	while($row = mysql_fetch_array($sql)){
		$ss = mysql_query("select * from `customers` where `id`='".$row['customer']."'")or die(mysql_error());
		$rs = mysql_fetch_array($ss);
?>
<tr>
<td style="width:90px; height:25px; padding-left:5px;"><font class="font_8g"><b><?php echo $row['masterid']; ?></b></font></td>
<td style="width:150px; height:25px; padding-left:5px; border-left:1px solid #eee;"><font class="font_8g"><?php echo $rs['name']; ?></font></td>
<td style="width:180px; height:25px; padding-left:5px; border-left:1px solid #eee;"><font class="font_8g"><?php echo $row['durum']." ".$row['emlak']." - ".$row['cesit']; ?></font></td>
<td style="width:20px; text-align:center; height:25px; border-left:1px solid #eee;">
<form name="pics" action="picture.php" method="post" style="margin:0; padding:0;">
<input type="hidden" name="masterid" value="<?= $row['masterid']?>">
<input type="image" src="images/icons/picture1.gif">
</form>
</td>
<td style="width:19px; text-align:center; height:25px; border-left:1px solid #eee;"><a href="advertu.php?masterid=<?= $row['masterid'];?>"><img src="images/icons/configure.gif" width="16" height="16" border="0"></a></td>
<td style="width:19px; text-align:center; height:25px; border-left:1px solid #eee;"><a href="deletea.php?id=<?= $row['id'];?>"><img src="images/icons/trash.gif" width="16" height="16" border="0"></a></td>
</tr>
<tr>
<td colspan="6" style="height:1px; background-color:#ccc;"></td>
</tr>
<? } ?>
</table>
<? }if($num==0){ ?>
<table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #ccc; background-color:#f9f9f9;">
	<tr>
		<td style="height:150px; width:498px;" align="center"><img src="images/icons/info.gif"><br /><br /><font class="font_8s"><b>Arama sonucu hi&ccedil; bir &ouml;&#287;e bulunamad&#305;<br />Arama kriterinizi de&#287;i&#351;tirip tekrar deneyiniz...</b></font></td>
	</tr>
</table>
<? } footer(); ?>