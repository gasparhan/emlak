<?php
$isim     = $_POST['isim'];
$email     = $_POST['email'];
$konu     = $_POST['konu'];
$mesaj     = $_POST['mesaj'];

$alici ="info@localhost.com"; // buraya iletisim formundan gelecek mesajin hangi adrese gidecegini belirttik
//* Email g�nderiyoruz  

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: <'.$rootmail.'>' . "\r\n";
$headers .= 'From: '.$isim.'<'.$email.'>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

mail($alici, $konu, $mesaj, $headers);
    
?>
..............................
alert('Mesajiniz g�nderilmistir. Tesekk�r ederiz');
........................='javascript:history.back(-1)';
</script>