<?php
include_once "config.inc.php"; 
include_once "template.php";
top();
$sql = "insert into `customers` set
`type`='".$_POST['type']."',
`name`='".$_POST['name']."',
`phone`='".$_POST['phone']."',
`gsm`='".$_POST['gsm']."',
`fax`='".$_POST['fax']."',
`email`='".$_POST['email']."',
`address`='".$_POST['address']."',
`state`='".$_POST['state']."',
`city`='".$_POST['city']."',
`profession`='".$_POST['profession']."',
`notes`='".$_POST['notes']."'";
$sql = mysql_query($sql)or die(mysql_error());


?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/apply.gif" width="48" height="48"><br><br><font class="font_8s">Bilgiler Ba&#351;ar&#305;yla Kaydedildi !</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="Yeni Ekle" class="ButtonStyle" style="width:98px;" onClick="javascript:location='customer.php?get=add';">
<input type="button" name="basa" value="Ba&#351;a D&ouml;n" class="ButtonStyle" style="width:98px;" onClick="javascript:location='index.php';">
</td>
</tr>
</table>
<? footer();?>