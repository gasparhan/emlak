function findObject(object){
	var object;
	if(object == "date"){
		if((document.getElementById('bd').value =="")||
		   (document.getElementById('bm').value =="")||
		   (document.getElementById('by').value =="")){
			alert('Geçerli bilgi girilmedi yada bos veri !\nLütfen bilgileri kontrol ediniz!');
		}else{
			document.get.submit();
		}
	} else {
		if(document.getElementById('masterid').value ==""){
			alert('Geçerli bilgi girilmedi yada bos veri !\nLütfen form bilgilerini kontrol ediniz!');
		}else{
			document.get.submit();
		}
	}
}