<?php
include "template.php";
include "functions.php";
top();
?>
<? if($_GET['get'] == "estate"){?>
<form name="get" action="result.php?get=estate" method="post">
	<div class="divs">
		<p class="font_8g" style="width:400px; margin-bottom:5px;">Emlak numaras&#305;  (&ouml;rnek : SK-123456) : </p>
		<input type="text" id="masterid" name="masterid" style="width:200px;" class="FormStyle">
		<input type="button" style="width:75px;" value="Listele" id="listele" name="listele" onClick="findObject('estate');" class="ButtonStyle">
		<p class="font_8g" style="width:400px; margin-top:10px;">L&uuml;tfen g&ouml;r&uuml;nt&uuml;lemek istedi&#287;iniz ilan&#305;n emlak numaras&#305;n&#305; yaz&#305;n&#305;z...</p>
	</div>
</form>
<? } if($_GET['get'] == "owner"){ ?>
<form name="get" action="result.php?get=owner" method="post">
	<div class="divs">
		<p class="font_8g" style="width:400px; margin-bottom:5px;">Mal sahibinin ad&#305; (&ouml;rnek : Kemal Etikan) : </p>
		<input type="text" id="masterid" name="masterid" style="width:200px;" class="FormStyle">
		<input type="button" style="width:75px;" value="Listele" id="listele" name="listele" onClick="findObject('owner');" class="ButtonStyle">
		<p class="font_8g" style="width:400px; margin-top:10px;">L&uuml;tfen g&ouml;r&uuml;nt&uuml;lemek istedi&#287;iniz ilan&#305;n mal sahibi ad&#305;n&#305; yaz&#305;n&#305;z...</p>
	</div>
</form>
<? } if($_GET['get'] == "date"){ ?>
<form name="get" action="result.php?get=date" method="post">
	<div class="divs">
		<p class="font_8g" style="width:400px; margin-bottom:5px;">Listeleme Baslang&#305;ç Tarihine Gore Goster :</p>
		<select id="bd" name="bd" style="width:56px;" class="FormStyle">
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
		</select> <select id="bm" name="bm" style="width:60px;" class="FormStyle">
			<option value="">Ay</option>
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
		</select> <select id="by" name="by" style="width:80px;" class="FormStyle">
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
			<option value="2014">2014</option>
			<option value="2015">2015</option>
		</select> <input type="button" style="width:75px; margin-bottom:1px;" value="Listele" id="listele" name="listele" onClick="findObject('date');" class="ButtonStyle">
		<p class="font_8g" style="width:400px; margin-top:10px;">L&uuml;tfen g&ouml;r&uuml;nt&uuml;lemek istedi&#287;iniz ilan&#305;n ba&#351;lang&#305;&ccedil; tarihini se&ccedil;iniz...</p>
	</div>
</form>
<? } if($_GET['get'] == "photochg"){ ?>
<form name="get" action="picture.php" method="post">
	<div class="divs">
		<p class="font_8g" style="width:400px; margin-bottom:5px;">Emlak numaras&#305; (&ouml;rnek : SK-123456) : </p>
		<input type="text" id="masterid" name="masterid" style="width:200px;" class="FormStyle">
		<input type="submit" style="width:75px;" value="Listele" id="listele" name="listele" class="ButtonStyle">
		<p class="font_8g" style="width:400px; margin-top:10px;">L&uuml;tfen resim düzenlemek istedi&#287;iniz ilan&#305;n emlak numaras&#305;n&#305; yaz&#305;n&#305;z...</p>
	</div>
</form>
<? } footer(); ?>