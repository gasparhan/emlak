<?php
include_once "config.inc.php"; 
include_once "template.php";
include_once "functions.php";

top();

$callError = "<script>alert('Yuklediginiz resim .jpg formatinda olmali!'); location='javascript:history.back(-1)';</script>";

for($i=0; $i<count($_FILES['pic']); $i++){
	if((!$_FILES['pic']['type'][$i] == "image/pjpeg")||(!$_FILES['pic']['type'][$i] == "image/jpeg")){
		die($callError);
	}else{
		makeSmall($_FILES['pic']['name'][$i],$_FILES['pic']['tmp_name'][$i]);
		makeBiger($_FILES['pic']['name'][$i],$_FILES['pic']['tmp_name'][$i]);
		mysql_query("insert into `pictures` set `masterid`='".$_POST['masterid']."', 
		`picture`='".md5($_FILES['pic']['name'][$i]).".jpg'")or die (mysql_error());
	}
}
?>
<table width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;">
<tr>
<td style="padding:25px; border-bottom:1px solid #ccc; background-color:#f9f9f9;" align="center"><img src="images/icons/apply.gif" width="48" height="48"><br /><br /><font class="font_8s">Resimler Ba&#351;ar&#305;yla Kaydedildi !</font></td>
</tr>
<tr>
<td style="padding:5px;" align="center">
<input type="button" name="yeni" value="Yeni Ekle" style="width:98px;" class="ButtonStyle" onClick="javascript:location='picturea.php?masterid=<? echo $_POST['masterid'];?>';">
<input type="button" name="basa" value="Ba&#351;a D&ouml;n" style="width:98px;" class="ButtonStyle"  onClick="javascript:location='index.php';">
</td>
</tr>
</table>
<? footer();?>