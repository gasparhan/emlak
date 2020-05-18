<?php
ini_set("display_errors","off");
include "template.php";
top();
echo "\n";
?>
		<div style="width:480px; margin-left:10px;">
			<div><img src="images/headers/kanoemlak.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
			<p align="center" style="margin:5px 0 5px 0; border:1px solid #eee; padding:3px;"><img src="images/pictures/kano.jpg" style="border:1px solid #ccc;" width="320" height="240"></p>
			<p class="font_8g" style="margin:0;">
			<?php
				$sql = mysql_query("select * from `mainpage`")or die(mysql_error());
				$row = mysql_fetch_array($sql);
				echo $row['content'];
			?>
			</p>
			<p style="margin:15px 0 15px 0;">
			<table width="480" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="75"><font class="font_8g">Yetkili</font></td>
					<td width="405"><font class="font_8g">: &nbsp; <? echo $row['yetkili'];?></font></td>
				</tr>
				<tr>
					<td valign="top"><font class="font_8g">Adres</font></td>
					<td valign="top"><font class="font_8g">: &nbsp; <? echo $row['adres'];?></font></td>
				</tr>
				<tr>
					<td><font class="font_8g">Telefon 1</font></td>
					<td><font class="font_8g">: &nbsp; <? echo $row['telefon1'];?></font></td>
				</tr>
				<tr>
					<td><font class="font_8g">Telefon 2</font></td>
					<td><font class="font_8g">: &nbsp; <? echo $row['telefon2'];?></font></td>
				</tr>
				<tr>
					<td><font class="font_8g">Faks</font></td>
					<td><font class="font_8g">: &nbsp; <? echo $row['faks'];?></font></td>
				</tr>
				<tr>
					<td><font class="font_8g">Email </font></td>
					<td><font class="font_8g">: &nbsp; <? echo $row['email1'];?></font></td>
				</tr>
				<tr>
					<td><font class="font_8g">Email </font></td>
					<td><font class="font_8g">: &nbsp; <? echo $row['email2'];?></font></td>
				</tr>
				<tr>
					<td><font class="font_8g">Email </font></td>
					<td><font class="font_8g">: &nbsp; <? echo $row['email3'];?></font></td>
				</tr>
			</table>
			</p>
		</div>
<? footer(); ?>
