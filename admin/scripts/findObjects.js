function findObject(object){
	var object;
	if(object == "date"){
		if((document.getElementById('bd').value =="")||
		   (document.getElementById('bm').value =="")||
		   (document.getElementById('by').value =="")){
			alert('Ge�erli bilgi girilmedi yada bos veri !\nL�tfen bilgileri kontrol ediniz!');
		}else{
			document.get.submit();
		}
	} else {
		if(document.getElementById('masterid').value ==""){
			alert('Ge�erli bilgi girilmedi yada bos veri !\nL�tfen form bilgilerini kontrol ediniz!');
		}else{
			document.get.submit();
		}
	}
}