<?php
$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

$length = strlen($message1);
$length = $length/2;
$message1Decode = substr ($message1, 5 ,$length);
$message1Decode =str_replace("@#?", " ", $message1Decode);
$message1Decode = strrev($message1Decode);

$length = strlen($message2);
$length = $length/2;
$message2Decode = substr ($message2, 5 ,$length);
$message2Decode =str_replace("@#?", " ", $message2Decode);
$message2Decode = strrev($message2Decode);

$length = strlen($message3);
$length = $length/2;
$message3Decode = substr ($message3, 5 ,$length);
$message3Decode =str_replace("@#?", " ", $message3Decode);
$message3Decode = strrev($message3Decode);

echo $message1Decode . "<br>" . $message2Decode . "<br>" . $message3Decode;
?>