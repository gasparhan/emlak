<?php
ini_set("display_errors","off");
include "template.php";
top();
?>
<style>
	@import "css/style.css";
	@import "css/stil.css";
</style>
		<div style="width:480px; margin-left:10px;">
			<div><img src="images/headers/search.gif" width="150" height="20"></div>
			<div style="margin-top:5px;"><img src="images/tools/sepred.gif" width="480" height="4"></div>
			<div style="margin-top:5px;">
			<form name="search" action="get_result.php" method="post" style="margin:0; padding:0;">
				<table cellpadding="0" cellspacing="0" border="0" style="width:480px;">
					<tr>
						<td width="118" style="background-color:#f9f9f9; height:25px;"><font class="font_8g">Emlak Tipi</font></td>
						<td width="23"  style="background-color:#f9f9f9; height:25px;"><font class="font_8g">:</font></td>
						<td width="110" style="background-color:#f9f9f9; height:25px;"><input type="radio" name="emlak" value="Arsa"> <font class="font_8g">Arsa</font></td>
						<td width="110" style="background-color:#f9f9f9; height:25px;"><input type="radio" name="emlak" value="Konut" checked> <font class="font_8g">Konut</font></td>
						<td width="119" style="background-color:#f9f9f9; height:25px;"><input type="radio" name="emlak" value="Dukkan"> <font class="font_8g">Dükkan</font></td>
					</tr>
					<tr>
						<td style="height:25px;"><font class="font_8g">Emlak Durumu</font></td>
						<td style="height:25px;"><font class="font_8g">:</font></td>
						<td style="height:25px;"><input type="radio" name="durum" value="Kiralik"> <font class="font_8g">Kiral&#305;k</font></td>
						<td style="height:25px;"><input type="radio" name="durum" value="Satilik" checked> <font class="font_8g">Sat&#305;l&#305;k</font></td>
						<td style="height:25px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; height:25px;"><font class="font_8g">Bulundu&#287;u Semt </font></td>
						<td style="background-color:#f9f9f9; height:25px;"><font class="font_8g">:</font></td>
						<td style="background-color:#f9f9f9; height:25px;" colspan="2"><input type="text" name="semt" style="width:180px;" class="FormStyle"></td>
						<td style="background-color:#f9f9f9; height:25px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="height:25px;"><font class="font_8g">Büyüklük (m&sup2;)</font></td>
						<td style="height:25px;"><font class="font_8g">:</font></td>
						<td style="height:25px;"><input type="text" name="wa" style="width:80px;" class="FormStyle" value="1"> <font class="font_8g">ile</font></td>
						<td style="height:25px;"><input type="text" name="wb" style="width:70px;" class="FormStyle" value="999"> <font class="font_8g">aras&#305;</font></td>
						<td style="height:25px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; height:25px;"><font class="font_8g">Oda Say&#305;s&#305;</font></td>
						<td style="background-color:#f9f9f9; height:25px;"><font class="font_8g">:</font></td>
						<td style="background-color:#f9f9f9; height:25px;"><input type="text" name="oa" style="width:80px;" class="FormStyle" value="1"> <font class="font_8g">ile</font></td>
						<td style="background-color:#f9f9f9; height:25px;"><input type="text" name="ob" style="width:70px;" class="FormStyle" value="5"> <font class="font_8g">aras&#305;</font></td>
						<td style="background-color:#f9f9f9; height:25px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="height:25px;"><font class="font_8g">Fiyat</font></td>
						<td style="height:25px;"><font class="font_8g">:</font></td>
						<td style="height:25px;"><input type="text" name="pa" style="width:80px;" class="FormStyle" value="1"> <font class="font_8g">ile</font></td>
						<td style="height:25px;"><input type="text" name="pb" style="width:70px;" class="FormStyle" value="999"> <font class="font_8g">aras&#305;</font></td>
						<td style="height:25px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; height:25px;"><font class="font_8g">Anahtar Kelime</font></td>
						<td style="background-color:#f9f9f9; height:25px;"><font class="font_8g">:</font></td>
						<td style="background-color:#f9f9f9; height:25px;" colspan="2"><input type="text" name="keyword" style="width:180px;" class="FormStyle"></td>
						<td style="background-color:#f9f9f9; height:25px;">&nbsp;</td>
					</tr>
					<tr>
						<td style="height:30px; background-color:#e3e5e7; width:480px;" colspan="5" align="center"><input type="submit" style="width:120px;" class="ButtonStyle" value="Sonuçlar&#305; Göster"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
<? footer(); ?>
