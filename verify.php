<?php
$access_token = 'TjlSArdLoNqjGZXPo2KrbMbUVdBBtu4yqWS/XoAUfjMx8ZNr/3m4sXX3NF04sGnbqZMMrQpQxd0YA1MwPOK2ZwX+/volK3xbauXNeBHUKfMonc98liX/mUDO6EBo6kYghOzmFQwtiNru9sWfPW7x+wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
