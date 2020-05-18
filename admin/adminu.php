<?php
include_once "template.php";
include_once "config.inc.php";
top();

$sql = mysql_query("select * from `admin` where `id`='2'")or die(mysql_error());
$row = mysql_fetch_array($sql);

?>
<script language='JavaScript' type='text/javascript' src='conceptRTE.js'></script>
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px; ">
				<form name="ekle" action="adminp_upd.php" method="post" style="margin:0; padding:0;">
				<input type="hidden" name="id" value="2">
					<tr>
						<td colspan="4" style="height:5px;"></td>
					</tr>
					<tr>
						<td width="250px;"><font class="font_8g">&nbsp; Admin Kullan&#305;c&#305; Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="uin" class="FormStyle" style="width:200px;" value="<?php echo $row['uin'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Admin &#350;ifresi </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="pwd" class="FormStyle" style="width:200px;" value="<?php echo $row['pwd'];?>"></td>
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
					</form>
				</table>
				<table cellspacing="0" cellpadding="0" border="0" style="border:1px solid #ccc; width:500px; margin-top:10px;">
					<?
						$sql = mysql_query("select * from `mainpage`")or die(mysql_error());
						$row = mysql_fetch_array($sql);
					?>
					<form name="ekle" action="admin_upd.php" method="post" style="margin:0; padding:0;">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>">
					<tr>
						<td colspan="4" style="height:5px;"></td>
					</tr>
					<tr>
						<td width="250"><font class="font_8g">&nbsp; Yetkili Ad&#305; </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="yetkili" class="FormStyle" style="width:200px;" value="<?php echo $row['yetkili'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Telefon 1 </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="telefon1" class="FormStyle" style="width:200px;" value="<?php echo $row['telefon1'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Telefon2 </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="telefon2" class="FormStyle" style="width:200px;" value="<?php echo $row['telefon2'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Faks </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="faks" class="FormStyle" style="width:200px;" value="<?php echo $row['faks'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Email 1 </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="email1" class="FormStyle" style="width:200px;" value="<?php echo $row['email1'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Email 2 </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="email2" class="FormStyle" style="width:200px;" value="<?php echo $row['email2'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Email 3 </font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><input type="text" name="email3" class="FormStyle" style="width:200px;" value="<?php echo $row['email2'];?>"></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td><font class="font_8g">&nbsp; Adres</font></td>
						<td><font class="font_8g">&nbsp; :</font></td>
						<td><textarea name="adres" class="FormStyle" style="width:200px; height:50px;"><?php echo $row['adres'];?></textarea></td>
						<td><font class="font_8g">&nbsp; &nbsp;</font></td>
					</tr>
					<tr>
						<td colspan="4" align="center" style="background-color:#fff; height:240px;">
						<?
							echo "<script language='JavaScript' type='text/javascript'>";
							echo "initRTE('images/rte/', '', 'style.css', 'EN');";
							echo "writeRichText('content', '".$row['content']."', 470, 180, true, false);";
							echo "</script>";
						?>
						</td>
					</tr>
					<tr>
						<td style="padding:5px; border-top:1px solid #ccc; background-color:#f9f9f9;" align="center" colspan="4">
						<input type="reset" name="submit" value="Temizle" style="width:98px;" class="ButtonStyle"> 
						<input type="submit" name="submit" value="Gönder" style="width:98px;" class="ButtonStyle"></td>
					</tr>
					</form>
				</table>
				
<? footer();?>