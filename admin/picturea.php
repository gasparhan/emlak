<?php
include_once "config.inc.php"; 
include_once "template.php";
top();

?>
<form name="resim" method="post" action="picture_add.php" style="margin:0; padding:0;" enctype="multipart/form-data">
<input type="hidden" name="masterid" value="<?php echo $_GET['masterid'];?>">
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="border:1px solid #ccc; background-color:#f9f9f9;">
	<p style="margin:5px; padding:0;">
	<font class="font_8s">Resim 1 &nbsp; :  &nbsp;</font><input type="file" name="pic[]" style="width:250px;" class="FormStyle"><br />
	<font class="font_8s">Resim 2 &nbsp; :  &nbsp;</font><input type="file" name="pic[]" style="width:250px;" class="FormStyle"><br />
	<font class="font_8s">Resim 3 &nbsp; :  &nbsp;</font><input type="file" name="pic[]" style="width:250px;" class="FormStyle"><br />
	<font class="font_8s">Resim 4 &nbsp; :  &nbsp;</font><input type="file" name="pic[]" style="width:250px;" class="FormStyle"><br />
	<font class="font_8s">Resim 5 &nbsp; :  &nbsp;</font><input type="file" name="pic[]" style="width:250px;" class="FormStyle"><br />
	</p>
	</td>
  </tr>
  <tr>
  	<td style="text-align:center; padding:7px;">
	<input type="button" name="vazgec" value="Vazgeç" style="width:98px;" class="ButtonStyle" onClick="javascript:location='search.php?get=photochg';">
	<input type="submit" name="submit" value="Gönder" style="width:98px;" class="ButtonStyle">
	</td>
  </tr>
</table>
</form>
<? footer();?>
