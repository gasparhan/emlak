<?php
include_once "config.inc.php"; 
include_once "template.php";
top();

$sql = "update `mainpage` set
`yetkili`='".$_POST['yetkili']."',
`telefon1`='".$_POST['telefon1']."',
`telefon2`='".$_POST['telefon2']."',
`faks`='".$_POST['faks']."',
`email1`='".$_POST['email1']."',
`email2`='".$_POST['email2']."',
`email3`='".$_POST['email3']."',
`adres`='".$_POST['adres']."',
`content`='".$_POST['content']."'";
$sql = mysql_query($sql)or die(mysql_error());


?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/apply.gif" width="48" height="48"><br><br><font class="font_8s">Bilgiler Ba&#351;ar&#305;yla G&uuml;ncellendi !</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="Geri D&ouml;n" class="ButtonStyle" style="width:98px;" onClick="javascript:location='adminu.php';">
<input type="button" name="basa" value="Ba&#351;a D&ouml;n" class="ButtonStyle" style="width:98px;" onClick="javascript:location='index.php';">
</td>
</tr>
</table>
<? footer();?>