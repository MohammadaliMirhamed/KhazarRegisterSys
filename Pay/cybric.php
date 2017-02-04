<?php

function EnCryption($string)
{
@$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5("123456789"), $string, MCRYPT_MODE_CBC, md5(md5("!@#$%adS*&(ASD*&(@sda#$%as!#$SD@%^D%&s&*"))));
return $encrypted;}


function DeCryption($encrypted)
{
@$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5("123456789"), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5("!@#$%adS*&(ASD*&(@sda#$%as!#$SD@%^D%&s&*"))), "\0");
    return $decrypted;
} 



 // $a=EnCryption("123456789")  ;
 // $b=DeCryption($a);
 // echo "$a || $b";


?>
