<?php



$key=  base64_encode( base64_encode("णतथदधन଑଒ଓଔକଖଗଘଙଚଛଜଝଞଟଠଡଢଣତଥଦऩपफबभપફબભમયરऒओऔकखगघङऄअआइईउऊଫବଭମଯறலளழவߞߟߠߡߢߣߤख़ग़ज़ड़ढ़ߞߟߠߡߢߣߤߥߦߧߨߩߪ߫߬߭߮߯߰߱ࢤࢥࢦࢧࢨࢩࢪࢫࢬࢭࢮࢯࢰࢱࢲ"));

$fp = fopen("ufull.php", "r");

function decrypt($data,$key)
{
    @list($encrypted_data, $iv) = @explode('::', base64_decode($data), 2);
    return @openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}


$inicio='UGtESUJVQUU1dFJ2dDBKYXdyUVBmN3ZnVnIxMndVQmR0Qi9ZWExzS0Q1Yz06OmLqKrza5fRrXMh6x2Qbols=';


echo decrypt($inicio,$key);

?>
