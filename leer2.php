<?php

session_start();

$password = '1234567890123';

$passlenght = strlen($password);

if (!isset($_SESSION['variable_sesion']) && $_SESSION['variable_sesion'] != $password){
	
	header("Location: access.php");
}

$key=  base64_encode( base64_encode("णतथदधन଑଒ଓଔକଖଗଘଙଚଛଜଝଞଟଠଡଢଣତଥଦऩपफबभપફબભમયરऒओऔकखगघङऄअआइईउऊଫବଭମଯறலளழவߞߟߠߡߢߣߤख़ग़ज़ड़ढ़ߞߟߠߡߢߣߤߥߦߧߨߩߪ߫߬߭߮߯߰߱ࢤࢥࢦࢧࢨࢩࢪࢫࢬࢭࢮࢯࢰࢱࢲ"));

$fp = fopen("ufull.php", "r");


function decrypt($data,$key)
{
    @list($encrypted_data, $iv) = @explode('::', base64_decode($data), 2);
    return @openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

while(!feof($fp)) {

$linea = fgets($fp);

echo decrypt($linea,$key) . "<br/>";

}

fclose($fp);


 


?>