<?php
include_once "template.php";
include_once "config.inc.php";
top();
ini_set('display_errors','on');
?>
				<form name="ekle" action="advert_add.php" method="post" style="margin:0; padding:0;">
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px; ">
					<tr>
						<td colspan="4" align="center" style="padding:15px; background-color:#f9f9f9; border-bottom:1px solid #eee;"><img src="images/icons/about.gif"><br><font class="font_8g"><b>&Ouml;nemli Uyar&#305;</b><br />
						M&uuml;&#351;teri listesini kontrol ediniz yeni ekleyece&#287;iniz ilan veri taban&#305;nda bulunmayan bir m&uuml;&#351;teriye ait ise l&uuml;tfen &ouml;ncelikle ilan sahibi m&uuml;&#351;teriyi veri taban&#305;na ekleyiniz </font>
						</td>
					</tr>
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td width="268"><font class="font_8g">&nbsp; Emlak Sahibi</font></td>
						<td width="10"><font class="font_8g">&nbsp; :</font></td>
						<td width="205">
						<select name="customer" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
						<?php
							$sql = mysql_query("select * from `customers`");
							while($row=mysql_fetch_array($sql)){	
						?>
							<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
						<? } ?>
						</select></td>
						<td width="15">&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#304;lan Tarihi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="bgun" class="FormStyle" style="width:55px;">
							<option value="">Gün</option>
							<option value="1" <?php echo (1 == date("j") ? " selected" : "");?>>01</option>
							<option value="2" <?php echo (2 == date("j") ? " selected" : "");?>>02</option>
							<option value="3" <?php echo (3 == date("j") ? " selected" : "");?>>03</option>
							<option value="4" <?php echo (4 == date("j") ? " selected" : "");?>>04</option>
							<option value="5" <?php echo (5 == date("j") ? " selected" : "");?>>05</option>
							<option value="6" <?php echo (6 == date("j") ? " selected" : "");?>>06</option>
							<option value="7" <?php echo (7 == date("j") ? " selected" : "");?>>07</option>
							<option value="8" <?php echo (8 == date("j") ? " selected" : "");?>>08</option>
							<option value="9" <?php echo (9 == date("j") ? " selected" : "");?>>09</option>
							<option value="10"<?php echo (10== date("j") ? " selected" : "");?>>10</option>
							<option value="11"<?php echo (11== date("j") ? " selected" : "");?>>11</option>
							<option value="12"<?php echo (12== date("j") ? " selected" : "");?>>12</option>
							<option value="13"<?php echo (13== date("j") ? " selected" : "");?>>13</option>
							<option value="14"<?php echo (14== date("j") ? " selected" : "");?>>14</option>
							<option value="15"<?php echo (15== date("j") ? " selected" : "");?>>15</option>
							<option value="16"<?php echo (16== date("j") ? " selected" : "");?>>16</option>
							<option value="17"<?php echo (17== date("j") ? " selected" : "");?>>17</option>
							<option value="18"<?php echo (18== date("j") ? " selected" : "");?>>18</option>
							<option value="19"<?php echo (19== date("j") ? " selected" : "");?>>19</option>
							<option value="20"<?php echo (20== date("j") ? " selected" : "");?>>20</option>
							<option value="21"<?php echo (21== date("j") ? " selected" : "");?>>21</option>
							<option value="22"<?php echo (22== date("j") ? " selected" : "");?>>22</option>
							<option value="23"<?php echo (23== date("j") ? " selected" : "");?>>23</option>
							<option value="24"<?php echo (24== date("j") ? " selected" : "");?>>24</option>
							<option value="25"<?php echo (25== date("j") ? " selected" : "");?>>25</option>
							<option value="26"<?php echo (26== date("j") ? " selected" : "");?>>26</option>
							<option value="27"<?php echo (27== date("j") ? " selected" : "");?>>27</option>
							<option value="28"<?php echo (28== date("j") ? " selected" : "");?>>28</option>
							<option value="29"<?php echo (29== date("j") ? " selected" : "");?>>29</option>
							<option value="30"<?php echo (30== date("j") ? " selected" : "");?>>30</option>
							<option value="31"<?php echo (31== date("j") ? " selected" : "");?>>31</option>
						</select> <select name="bay" class="FormStyle" style="width:82px;">
							<option value="">Ay</option>
							<option value="1" <?php echo (1 == date("n") ? " selected" : "");?>>Ocak</option>
							<option value="2" <?php echo (2 == date("n") ? " selected" : "");?>>Subat</option>
							<option value="3" <?php echo (3 == date("n") ? " selected" : "");?>>Mart</option>
							<option value="4" <?php echo (4 == date("n") ? " selected" : "");?>>Nisan</option>
							<option value="5" <?php echo (5 == date("n") ? " selected" : "");?>>Mayis</option>
							<option value="6" <?php echo (6 == date("n") ? " selected" : "");?>>Haziran</option>
							<option value="7" <?php echo (7 == date("n") ? " selected" : "");?>>Temmuz</option>
							<option value="8" <?php echo (8 == date("n") ? " selected" : "");?>>Agustos</option>
							<option value="9" <?php echo (9 == date("n") ? " selected" : "");?>>Eylül</option>
							<option value="10"<?php echo (10== date("n") ? " selected" : "");?>>Ekim</option>
							<option value="11"<?php echo (11== date("n") ? " selected" : "");?>>Kasim</option>
							<option value="12"<?php echo (12== date("n") ? " selected" : "");?>>Aralik</option>
						</select> <select name="byil" class="FormStyle" style="width:60px;">
							<option value="">Y&#305;l</option>
							<option value="2005" <?php echo (2005== date("Y") ? " selected" : "");?>>2005</option>
							<option value="2006" <?php echo (2006== date("Y") ? " selected" : "");?>>2006</option>
							<option value="2007" <?php echo (2007== date("Y") ? " selected" : "");?>>2007</option>
							<option value="2008" <?php echo (2008== date("Y") ? " selected" : "");?>>2008</option>
							<option value="2009" <?php echo (2009== date("Y") ? " selected" : "");?>>2009</option>
							<option value="2010" <?php echo (2010== date("Y") ? " selected" : "");?>>2010</option>
							<option value="2011" <?php echo (2011== date("Y") ? " selected" : "");?>>2011</option>
							<option value="2012" <?php echo (2012== date("Y") ? " selected" : "");?>>2012</option>
							<option value="2013" <?php echo (2013== date("Y") ? " selected" : "");?>>2013</option>
						</select>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Durumu</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="durum" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="Kiralik">Kiral&#305;k</option>
							<option value="Satilik">Sat&#305;l&#305;k</option>
						</select>
						</td>
						<td>&nbsp;</td>
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
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak &Ccedil;e&#351;idi (&ouml;rnek: Apartman Dairesi) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="cesit" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#350;ehir Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="sehir" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Semt Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="semt" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Mahalle Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="mahalle" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; Cadde *</font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="cadde" class="FormStyle" style="width:200px;"></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Bina Ad&#305; *</font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="a_bina" class="FormStyle" style="width:200px;"></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Bina No *</font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="n_bina" class="FormStyle" style="width:200px;"></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Kat No *</font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="katno" class="FormStyle" style="width:200px;"></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Daire No *</font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="daire" class="FormStyle" style="width:200px;"></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Detayl&#305; Tarif *<br />
						&nbsp; Not : Y&#305;ld&#305;zl&#305; alanlar&#305; kullan&#305;c&#305;lar <u>g&ouml;remez</u> </font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><textarea name="tarif" class="FormStyle" style="width:200px; height:50px;"></textarea></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Fiyat&#305;</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="fiyat" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
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
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Depozito (isteniyorsa rakam olarak giriniz)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="depozit" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Aidat (isteniyorsa rakam olarak giriniz)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="aidat" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Büyüklügü (metre kare cinsinden)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="buyukluk" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Oda Say&#305;s&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="o_sayi" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Salon Say&#305;s&#305;</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="s_sayi" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Banyo Sayisi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="b_sayi" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Kat Sayisi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="k_sayi" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Bina Yap&#305;m Y&#305;l&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="yas" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Manzara (&ouml;rnek: Deniz Manzaral&#305;) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="manzara" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Havuz</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="havuz" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Otopark</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="otopark" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Is&#305;tma Sistemi (&ouml;rnek: Merkezi &#305;s&#305;tma) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="isitma" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Yak&#305;t (&ouml;rnek: Do&#287;al gaz) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="yakit" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Asansör</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="asansor" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="var">Var</option>
							<option value="yok">Yok</option>
						</select>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; TV / Uydu </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="tv" class="FormStyle" style="width:200px;"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#304;lanla ilgili detaylar </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><textarea name="detaylar" class="FormStyle" style="width:200px; height:50px;"></textarea></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; <b>Özel notlar (Kullan&#305;c&#305;lar Göremez)</b></font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><textarea name="notlar" class="FormStyle" style="width:200px; height:50px;"></textarea></td>
						<td style="background-color:#f9f9f9;">&nbsp;</td>
					</tr>
					<tr>
						<td style="height:30px;"><font class="font_8g">&nbsp; &#304;lan Durumu</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="status" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="Yayinda" selected style="color:#009900;">Yay&#305;nda</option>
							<option value="Beklemede">Beklemede</option>
							<option value="iptal" style="color:#CC0000; background-color:#ffe2e2; ">&#304;ptal</option>
							<option value="Satildi">Sat&#305;ld&#305;</option>
							<option value="Kiralandi">Kiraland&#305;</option>
						</select>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="padding:5px; border-top:1px solid #ccc; background-color:#f9f9f9;" align="center" colspan="4">
						<input type="reset" name="submit" value="Temizle" style="width:98px;" class="ButtonStyle"> 
						<input type="submit" name="submit" value="Gönder" style="width:98px;" class="ButtonStyle"></td>
					</tr>
				</table>
				</form>
<? footer();?>