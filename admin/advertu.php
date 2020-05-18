<?php
include_once "template.php";
include_once "config.inc.php";
top();
if(!$_GET['masterid']){
	echo "<script>alert('Geçerli bilgi girilmedi yada bos veri!\\nLütfen forma geri dönüp bilgileri kontrol ediniz!');location='javascript:history.back(-1)';</script>";
	exit;
}
$sql = mysql_query("select * from `adverts` where `masterid` = '".$_GET['masterid']."'")or die(mysql_error());
$row = mysql_fetch_array($sql);
ini_set('display_errors','on');
?>
<script>
function nedir(){
	if((document.getElementById('status').value=='Satildi')||
	   (document.getElementById('status').value=='Kiralandi')){
		document.getElementById('starih').style.display="block";
	}
}
</script>
				<form name="ekle" action="advert_upd.php" method="post" style="margin:0; padding:0;">
				<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px; ">
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Sahibi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="customer" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
						<?php
							$s = mysql_query("select * from `customers`");
							while($r=mysql_fetch_array($s)){	
						?>
							<option value="<?php echo $r['id'];?>" <?php if($row['customer']==$r['id']){echo "selected";}?>><?php echo $r['name'];?></option>
						<? } ?>
						</select></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#304;lan Ba&#351;lang&#305;&ccedil; Tarihi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="bgun" class="formsolid" style="width:55px;">
							<? 
								for($i=0; $i<31; $i++){
									echo "\t\t\t\t\t\t<option value=\"".($i+1)."\"".($i+1 == date("d",$row['b_tarih']) ? " selected" : "").">".($i+1)."</option>\n";
								}
							?>
						</select>
						<select name="bay" class="formsolid" style="width:82px;">
							<option value="1" <? if(1 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Ocak</option>
							<option value="2" <? if(2 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Subat</option>
							<option value="3" <? if(3 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Mart</option>
							<option value="4" <? if(4 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Nisan</option>
							<option value="5" <? if(5 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Mayis</option>
							<option value="6" <? if(6 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Haziran</option>
							<option value="7" <? if(7 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Temmuz</option>
							<option value="8" <? if(8 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Agustos</option>
							<option value="9" <? if(9 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Eylül</option>
							<option value="10" <? if(10 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Ekim</option>
							<option value="11" <? if(11 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Kasim</option>
							<option value="12" <? if(12 == date("m",$row['b_tarih'])){ echo "selected"; }?>>Aralik</option>
						</select>
						<select name="byil" class="formsolid" style="width:60px;">
							<? 
								for($i=0; $i<31; $i++){
									echo "\t\t\t\t\t\t<option value=\"".($i+2005)."\"".($i+2005 == date("Y",$row['b_tarih']) ? " selected" : "").">".($i+2005)."</option>\n";
								}
							?>
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
							<option value="Kiralik" <?php if($row['durum']=="Kiralik"){echo "selected";} ?>>Kiral&#305;k</option>
							<option value="Satilik" <?php if($row['durum']=="Satilik"){echo "selected";} ?>>Sat&#305;l&#305;k</option>
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
							<option value="Arsa" <?php if($row['emlak']=="Arsa"){echo "selected";} ?>>Arsa</option>
							<option value="Dukkan" <?php if($row['emlak']=="Dukkan"){echo "selected";} ?>>Dükkan</option>
							<option value="Konut" <?php if($row['emlak']=="Konut"){echo "selected";} ?>>Konut</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak &ccedil;e&#351;idi (&ouml;rnek: Apartman Dairesi) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="cesit" class="FormStyle" style="width:200px;" value="<?php echo $row['cesit'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#350;ehir Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="sehir" class="FormStyle" style="width:200px;" value="<?php echo $row['sehir'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Semt Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="semt" class="FormStyle" style="width:200px;" value="<?php echo $row['semt'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Mahalle Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="mahalle" class="FormStyle" style="width:200px;" value="<?php echo $row['mahalle'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; Cadde</font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="cadde" class="FormStyle" style="width:200px;" value="<?php echo $row['cadde'];?>"></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Bina Ad&#305; </font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="a_bina" class="FormStyle" style="width:200px;" value="<?php echo $row['a_bina'];?>"></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Bina No </font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="n_bina" class="FormStyle" style="width:200px;" value="<?php echo $row['n_bina'];?>"></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Kat No </font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="katno" class="FormStyle" style="width:200px;" value="<?php echo $row['katno'];?>"></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Daire No </font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><input type="text" name="daire" class="FormStyle" style="width:200px;" value="<?php echo $row['daire'];?>"></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9; border-top:1px solid #eee;"><font class="font_8g">&nbsp; Detayl&#305; Tarif </font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><textarea name="tarif" class="FormStyle" style="width:200px; height:50px;"><?php echo $row['tarif'];?></textarea></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Fiyat&#305;</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="fiyat" class="FormStyle" style="width:200px;" value="<?php echo $row['fiyat'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Para Birimi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="birim" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="trl" <?php if($row['birim']=="trl"){echo "selected";}?>>Türk Lirasi (TL)</option>
							<option value="usd" <?php if($row['birim']=="usd"){echo "selected";}?>>Amerikan Dolari (USD)</option>
							<option value="eur" <?php if($row['birim']=="eur"){echo "selected";}?>>Euro (EUR)</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Depozito (isteniyorsa rakam olarak giriniz)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="depozit" class="FormStyle" style="width:200px;" value="<?php echo $row['depozit'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Aidat(isteniyorsa rakam olarak giriniz)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="aidat" class="FormStyle" style="width:200px;" value="<?php echo $row['aidat'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Emlak Büyüklügü (metre kare cinsinden)</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="buyukluk" class="FormStyle" style="width:200px;" value="<?php echo $row['buyukluk'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Oda Say&#305;s&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="o_sayi" class="FormStyle" style="width:200px;" value="<?php echo $row['o_sayi'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Salon Say&#305;s&#305;</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="s_sayi" class="FormStyle" style="width:200px;" value="<?php echo $row['s_sayi'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Banyo Sayisi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="b_sayi" class="FormStyle" style="width:200px;" value="<?php echo $row['b_sayi'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Kat Sayisi</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="k_sayi" class="FormStyle" style="width:200px;" value="<?php echo $row['k_sayi'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Bina Yap&#305;m Y&#305;l&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="yas" class="FormStyle" style="width:200px;" value="<?php echo $row['yas'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Manzara (&ouml;rnek: Deniz Manzaral&#305;) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="manzara" class="FormStyle" style="width:200px;" value="<?php echo $row['manzara'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Havuz</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="havuz" class="FormStyle" style="width:200px;" value="<?php echo $row['havuz'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Otopark</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="otopark" class="FormStyle" style="width:200px;" value="<?php echo $row['otopark'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Is&#305;tma Sistemi (&ouml;rnek: Merkezi &#305;s&#305;tma) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="isitma" class="FormStyle" style="width:200px;" value="<?php echo $row['isitma'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Yakit (&ouml;rnek: Do&#287;al gaz) </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="yakit" class="FormStyle" style="width:200px;" value="<?php echo $row['yakit'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Asansör</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="asansor" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="var" <?php if($row['asansor']=="var"){echo "selected";}?>>Var</option>
							<option value="yok" <?php if($row['asansor']=="yok"){echo "selected";}?>>Yok</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; TV / Uydu </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="tv" class="FormStyle" style="width:200px;" value="<?php echo $row['tv'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; &#304;lanla ilgili detaylar </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><textarea name="detaylar" class="FormStyle" style="width:200px; height:50px;"><?php echo $row['detaylar'];?></textarea></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; <b>Özel notlar (Kullan&#305;c&#305;lar Göremez)</b></font></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; :</font></td>
						<td style="background-color:#f9f9f9;"><textarea name="notlar" class="FormStyle" style="width:200px; height:50px;"><?php echo $row['notlar'];?></textarea></td>
						<td style="background-color:#f9f9f9;"><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="height:30px;"><font class="font_8g">&nbsp; &#304;lan Durumu</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="status" class="FormStyle" style="width:205px;" onChange="nedir();">
							<option value="">Lütfen Seçiniz</option>
							<option value="Yayinda" style="color:#009900;" <?php if($row['status']=="Yayinda"){echo "selected";}?>>Yay&#305;nda</option>
							<option value="Beklemede" <?php if($row['status']=="Beklemede"){echo "selected";}?>>Beklemede</option>
							<option value="iptal" style="color:#CC0000; background-color:#ffe2e2;" <?php if($row['status']=="iptal"){echo "selected";}?>>&#304;ptal</option>
							<option value="Satildi" <?php if($row['status']=="Satildi"){echo "selected";}?>>Sat&#305;ld&#305;</option>
							<option value="Kiralandi" <?php if($row['status']=="Kiralandi"){echo "selected";}?>>Kiraland&#305;</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr style="display:none;" id="starih">
						<td><font class="font_8g">&nbsp; Sat&#305;ld&#305;&#287;&#305; / Kiraland&#305;&#287;&#305; Tarih </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="sgun" class="formsolid" style="width:55px;">
							<? 
								for($i=0; $i<31; $i++){
									echo "\t\t\t\t\t\t<option value=\"".($i+1)."\"".($i+1 == date("d",$row['s_tarih']) ? " selected" : "").">".($i+1)."</option>\n";
								}
							?>
						</select>
						<select name="say" class="formsolid" style="width:82px;">
							<option value="1" <? if(1 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Ocak</option>
							<option value="2" <? if(2 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Subat</option>
							<option value="3" <? if(3 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Mart</option>
							<option value="4" <? if(4 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Nisan</option>
							<option value="5" <? if(5 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Mayis</option>
							<option value="6" <? if(6 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Haziran</option>
							<option value="7" <? if(7 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Temmuz</option>
							<option value="8" <? if(8 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Agustos</option>
							<option value="9" <? if(9 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Eylül</option>
							<option value="10" <? if(10 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Ekim</option>
							<option value="11" <? if(11 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Kasim</option>
							<option value="12" <? if(12 == date("m",$row['s_tarih'])){ echo "selected"; }?>>Aralik</option>
						</select>
						<select name="syil" class="formsolid" style="width:60px;">
							<? 
								for($i=0; $i<31; $i++){
									echo "\t\t\t\t\t\t<option value=\"".($i+2005)."\"".($i+2005 == date("Y",$row['s_tarih']) ? " selected" : "").">".($i+2005)."</option>\n";
								}
							?>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td colspan="4" style="height:5px;"></td>
					</tr>
					<tr>
						<td style="padding:5px; border-top:1px solid #ccc; background-color:#f9f9f9;" align="center" colspan="4">
						<input type="reset" name="submit" value="Temizle" style="width:98px;" class="ButtonStyle"> 
						<input type="submit" name="submit" value="Gönder" style="width:98px;" class="ButtonStyle"></td>
					</tr>
				</table>
				</form>
<? footer();?>