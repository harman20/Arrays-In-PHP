<?php
$arr=json_encode(array(

    "phone"=>"9041127782",
    "body"=>"Hello"
));
$url="https://api.chat-api.com/instance260735/message?token=bd3di3629q3jpiiw";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
'Content-type:application/json',
'Content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);
echo $result;
?>