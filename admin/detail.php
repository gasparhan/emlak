<?php
include "template.php";
include "functions.php";
top();
?>
				<form name="ekle" action="results.php" method="post" style="margin:0; padding:0;">
				<input type="hidden" name="act" value="search">
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px;">
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#304;lan ba&#351;lang&#305;&ccedil; tarihi </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="bgun" class="FormStyle" style="width:55px;">
							<option value="">Gün</option>
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
							<option value="5">05</option>
							<option value="6">06</option>
							<option value="7">07</option>
							<option value="8">08</option>
							<option value="9">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select> <select name="bay" class="FormStyle" style="width:82px;">
							<option value="">Ay</option>
							<option value="1">Ocak</option>
							<option value="2">Subat</option>
							<option value="3">Mart</option>
							<option value="4">Nisan</option>
							<option value="5">Mayis</option>
							<option value="6">Haziran</option>
							<option value="7">Temmuz</option>
							<option value="8">Agustos</option>
							<option value="9">Eylül</option>
							<option value="10">Ekim</option>
							<option value="11">Kasim</option>
							<option value="12">Aralik</option>
						</select> <select name="byil" class="FormStyle" style="width:60px;">
							<option value="">Y&#305;l</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#304;lan biti&#351; tarihi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="sgun" class="FormStyle" style="width:55px;">
							<option value="">Gün</option>
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
							<option value="5">05</option>
							<option value="6">06</option>
							<option value="7">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select> <select name="say" class="FormStyle" style="width:82px;">
							<option value="">Ay</option>
							<option value="1">Ocak</option>
							<option value="2">Subat</option>
							<option value="3">Mart</option>
							<option value="4">Nisan</option>
							<option value="5">Mayis</option>
							<option value="6">Haziran</option>
							<option value="7">Temmuz</option>
							<option value="8">Agustos</option>
							<option value="9">Eylül</option>
							<option value="10">Ekim</option>
							<option value="11">Kasim</option>
							<option value="12">Aralik</option>
						</select> <select name="syil" class="FormStyle" style="width:60px;">
							<option value="">Y&#305;l</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak durumu</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="durum" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="Kiralik">Kiral&#305;k</option>
							<option value="Satilik">Sat&#305;l&#305;k</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak T&uuml;r&uuml; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="emlak" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="Arsa">Arsa</option>
							<option value="Dukkan">Dükkan</option>
							<option value="Konut">Konut</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="height:30px;"><font class="font_8g">&nbsp; &#304;lan Durumu</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="status" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="Yayinda" style="color:#009900;">Yay&#305;nda</option>
							<option value="Beklemede">Beklemede</option>
							<option value="iptal" style="color:#CC0000; background-color:#ffe2e2;">&#304;ptal</option>
							<option value="Satildi">Sat&#305;ld&#305;</option>
							<option value="Kiralandi">Kiraland&#305;</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Büyüklügü (metre kare cinsinden)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="buyukluk" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Oda Say&#305;s&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="o_sayi" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Fiyat Alt Limit</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="fiyat" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Para Birimi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="birim" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="trl">Türk Lirasi (TL)</option>
							<option value="usd">Amerikan Dolari (USD)</option>
							<option value="eur">Euro (EUR)</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td style="padding:5px; border-top:1px solid #ccc; background-color:#f9f9f9;" align="center" colspan="4">
						<input type="reset" name="submit" value="Temizle" style="width:98px;" class="ButtonStyle"> 
						<input type="submit" name="submit" value="Sonu&ccedil;lar" style="width:98px;" class="ButtonStyle"></td>
					</tr>
				</table>
				</form>
<? footer(); ?>
