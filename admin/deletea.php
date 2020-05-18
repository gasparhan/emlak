<?php
include_once "config.inc.php"; 
include_once "template.php";
top();
if($_GET['confirm']=="true"){
$sql = mysql_query("select * from `adverts` where `id`='".$_GET['id']."'")or die(mysql_error());
$row = mysql_fetch_array($sql);
mysql_query("delete from `pictures` where `masterid`='".$row['masterid']."'")or die(mysql_error());
mysql_query("delete from `adverts` where `id`='".$_GET['id']."'")or die(mysql_error());
?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/apply.gif" width="48" height="48"><br /><br />
<font class="font_8s">Kay&#305;t Ba&#351;ar&#305;yla Silindi !</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="ilanlara D&ouml;n" style="width:98px;" class="ButtonStyle" onClick="javascript:location='search.php?get=all';">
<input type="button" name="basa" value="Basa D&ouml;n" style="width:98px;" class="ButtonStyle"  onClick="javascript:location='index.php';">
</td>
</tr>
</table>
<? } else{ ?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/info.gif" width="48" height="48"><br /><br /><font class="font_8s">Bu kayda ait t&uuml;m bilgiler tamamen silinecek onayl&#305;yormusunuz?</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="OK" style="width:60px;" class="ButtonStyle" onClick="javascript:location='deletea.php?id=<? echo $_GET['id'];?>&confirm=true';">
<input type="button" name="basa" value="Cancel" style="width:60px;" class="ButtonStyle"  onClick="javascript:history.back(-1);">
</td>
</tr>
</table>
<? } footer();?>
