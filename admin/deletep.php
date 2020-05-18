<?php
include_once "config.inc.php"; 
include_once "template.php";
top();
if($_GET['confirm']=="true"){
$sql = mysql_query("delete from `pictures` where `id`='".$_GET['id']."'")or die(mysql_error());
unlink("../images/pictures/".$_GET['picture']);
?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/apply.gif" width="48" height="48"><br /><br />
<font class="font_8s">Kay&#305;t Ba&#351;ar&#305;yla Silindi !</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<form action="picture.php" method="post" name="geri" style="margin:0; padding:0;">
	<input type="hidden" name="masterid" value="<?php echo $_GET['masterid'];?>">
	<input type="submit" name="yeni" value="Resimlere D&ouml;n" style="width:98px;" class="ButtonStyle" onClick="javascript:location='search.php?get=photochg';"> 
	<input type="button" name="basa" value="Basa D&ouml;n" style="width:98px;" class="ButtonStyle"  onClick="javascript:location='index.php';">
</form>
</td>
</tr>
</table>
<? } else{ ?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/info.gif" width="48" height="48"><br /><br /><font class="font_8s">Resim tamamen silinecek onayl&#305;yormusunuz?</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="OK" style="width:60px;" class="ButtonStyle" onClick="javascript:location='deletep.php?id=<? echo $_GET['id']."&picture=".$_GET['picture']."&masterid=".$_GET['masterid'];?>&confirm=true';">
<input type="button" name="basa" value="Cancel" style="width:60px;" class="ButtonStyle"  onClick="javascript:history.back(-1);">
</td>
</tr>
</table>
<? } footer();?>
