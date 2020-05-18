<?php
include "template.php";
include "config.inc.php";
top();
?>
				<table cellpadding="0" cellspacing="0" border="0" width="500">
					<tr>
						<td style="width:498px; border:1px solid #ccc; background-color:#fff; vertical-align:top;">
						<table cellpadding="0" cellspacing="0" border="0" width="498">
							<tr>
								<td style="width:166px; text-align:center"><a href="customer.php?get=all" class="cust">T&uuml;m M&uuml;&#351;terileri Göster</a></td>
								<td style="width:166px; text-align:center"><a href="customer.php?get=add" class="cust">Yeni Mü&#351;teri Ekle</a></td>
								<td style="width:166px; text-align:center"><a href="customer.php?get=pst" class="cust">E-Posta Gönder</a></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				<? if($_GET['get']=="all"){?>
				<table cellpadding="0" cellspacing="0" border="0" width="500" style="border:1px solid #ccc; background-color:#f9f9f9; border-bottom:0; margin-top:10px;">
				<?php 
					$sql = mysql_query("select * from `customers`")or die(mysql_error());
					while($row = mysql_fetch_array($sql)){
				?>
					<tr>
						<td style="width:150px; height:25px; padding-left:5px;"><font class="font_8g"><b><?php echo $row['name']; ?></b></font></td>
						<td style="width:150px; height:25px; padding-left:5px; border-left:1px solid #eee;"><font class="font_8g"><?php echo $row['state']; ?></font></td>
						<td style="width:160px; height:25px; padding-left:5px; border-left:1px solid #eee;"><font class="font_8g"><?php echo $row['profession']; ?></font></td>
						<td style="width:20px; text-align:center; height:25px; border-left:1px solid #eee;"><a href="customer.php?get=upd&id=<?= $row['id'];?>"><img src="images/icons/configure.gif" width="16" height="16" border="0"></a></td>
						<td style="width:20px; text-align:center; height:25px; border-left:1px solid #eee;"><a href="deletec.php?id=<?= $row['id'];?>"><img src="images/icons/trash.gif" width="16" height="16" border="0"></a></td>
					</tr>
					<tr>
						<td colspan="5" style="height:1px; background-color:#ccc;"></td>
					</tr>
				<? } ?>
				</table>
				<? }elseif($_GET['get']=="add"){?>
				<form name="ekle" action="customer_add.php" method="post" style="margin:0; padding:0;">
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px; margin-top:10px; ">
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td style="width:200px;"><font class="font_8g">&nbsp; M&uuml;&#351;teri Tipi </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="type" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="buyer">&loz; Al&#305;c&#305;</option>
							<option value="seller">&loz; Sat&#305;c&#305;</option>
							<option value="renter">&loz; Kiraya Veren</option>
							<option value="forrent">&loz; Kiralayan</option>
							<option value="other">&loz; Diger</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="width:200px;"><font class="font_8g">&nbsp; Ad / Soyad</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="name" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Telefon</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="phone" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; GSM</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="gsm" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Faks</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="fax" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; e-Mail</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="email" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Adres</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="address" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Semt</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="state" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Sehir</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="city" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Meslek</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="profession" class="FormStyle" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Özel notlar</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><textarea name="notes" class="FormStyle" style="width:200px; height:50px;"></textarea></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td style="padding:5px; border-top:1px solid #ccc; background-color:#f9f9f9;" align="center" colspan="4">
						<input type="reset" name="submit" value="Temizle" style="width:98px;" class="ButtonStyle"> 
						<input type="submit" name="submit" value="Gönder" style="width:98px;" class="ButtonStyle"></td>
					</tr>
				</table>
				</form>
				<? }elseif($_GET['get']=="upd"){  
					$sql = mysql_query("select * from `customers` where `id`='".$_GET['id']."'");
					$row = mysql_fetch_array($sql);
				?>
				<form name="ekle" action="customer_upd.php" method="post" style="margin:0; padding:0;">
				<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px; margin-top:10px; ">
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td style="width:200px;"><font class="font_8g">&nbsp; M&uuml;&#351;teri Tipi </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td>
						<select name="type" class="FormStyle" style="width:205px;">
							<option value="">Lütfen Seçiniz</option>
							<option value="buyer" <?php if($row['type']=="buyer"){echo "selected";}?>>&loz; Al&#305;c&#305;</option>
							<option value="seller" <?php if($row['type']=="seller"){echo "selected";}?>>&loz; Sat&#305;c&#305;</option>
							<option value="renter" <?php if($row['type']=="renter"){echo "selected";}?>>&loz; Kiraya Veren</option>
							<option value="forrent" <?php if($row['type']=="forrent"){echo "selected";}?>>&loz; Kiralayan</option>
							<option value="other" <?php if($row['type']=="other"){echo "selected";}?>>&loz; Diger</option>
						</select>
						</td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td style="width:200px;"><font class="font_8g">&nbsp; Ad / Soyad</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="name" class="FormStyle" value="<?php echo $row['name'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Telefon</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="phone" class="FormStyle" value="<?php echo $row['phone'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; GSM</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="gsm" class="FormStyle" value="<?php echo $row['gsm'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Faks</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="fax" class="FormStyle" value="<?php echo $row['fax'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; e-Mail</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="email" class="FormStyle" value="<?php echo $row['email'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Adres</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="address" class="FormStyle" value="<?php echo $row['address'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Semt</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="state" class="FormStyle" value="<?php echo $row['state'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Sehir</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="city" class="FormStyle" value="<?php echo $row['city'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Meslek</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="profession" class="FormStyle" value="<?php echo $row['profession'];?>" style="width:200px;"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Özel notlar</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><textarea name="notes" class="FormStyle" style="width:200px; height:50px;"><?php echo $row['notes'];?></textarea></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td colspan="4" height="5"></td>
					</tr>
					<tr>
						<td style="padding:5px; border-top:1px solid #ccc; background-color:#f9f9f9;" align="center" colspan="4">
						<input type="reset" name="submit" value="Temizle" style="width:98px;" class="ButtonStyle"> 
						<input type="submit" name="submit" value="Gönder" style="width:98px;" class="ButtonStyle"></td>
					</tr>
				</table>
				</form>
				<? } ?>
				
<? footer(); ?>