<?php
ini_set("display_errors","off");
include "template.php";
top();

$sql = mysql_query("select * from `mainpage`")or die(mysql_error());
$row = mysql_fetch_array($sql);
?>
<style>
	@import "css/style.css";
	@import "css/stil.css";
</style>
		<div style="width:480px; margin-left:10px;">
			<div><img src="images/headers/kanoemlak.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
			<p class="font_8g" style="margin:0; margin-top:5px;">Sinanoba ve Mimaroba'da gayrimenkul kiralama, sat&#305;&#351; ve dan&#305;&#351;manl&#305;k konular&#305;nda profesyonel &ccedil;al&#305;&#351;ma anlay&#305;&#351;&#305;m&#305;zla hizmetinizdeyiz</p>
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
			<form name="sendmail" action="sendmail.php" method="post" style="margin:0; padding:20px 0 20px 0; border:1px solid #eee; text-align:center;">
				<table border="0" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td colspan="7" class="a" style="width:390px;" align="left"><img src="images/headers/form.gif"></td>
					</tr>
					<tr>
						<td colspan="7" style="height:5px;"></td>
					<tr>
						<td width="70" height="20" align="left"><font class="font_8g">Ad&#305;n&#305;z</font></td>
						<td width="5"><font class="font_8g">:</font></td>
						<td width="115"><input type="text" name="isim" style="width:115px;" class="FormStyle"></td>
						<td width="20">&nbsp;</td>
						<td width="60"><font class="font_8g">E-Mailiniz</font></td>
						<td width="5"><font class="font_8g">:</font></td>
						<td width="115"><input type="text" name="email" style="width:111px;" class="FormStyle"></td>
					</tr>
					<tr>
						<td width="70" height="25" align="left"><font class="font_8g">Konu</font></td>
						<td width="5"><font class="font_8g">:</font></td>
						<td width="315" colspan="5"><input type="text" name="konu" style="width:315px;" class="FormStyle"></td>
					</tr>
					<tr>
						<td width="70" valign="top" align="left"><font class="font_8g">Mesaj&#305;n&#305;z</font></td>
						<td width="5" valign="top"><font class="font_8g">:</font></td>
						<td width="315" colspan="5"><textarea name="mesaj" style="width:315px; height:75px;" class="FormStyle"></textarea></td>
					</tr>
					<tr>
						<td colspan="7" height="5"></td>
					</tr>
					<tr>
						<td colspan="7">
						<table cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td width="85%" class="font_8g" align="left">L&uuml;tfen t&uuml;m alanlar&#305; eksiksiz doldurunuz. </td>
								<td width="15%"><input type="submit" value="Gönder" class="ButtonStyle" style="width:75px;" /></td>
							</tr>
						</table>
						</td>
					</tr>
			</table>
			</form>
		</div>
<? footer(); ?>