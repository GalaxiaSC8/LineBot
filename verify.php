<?php
$access_token = 'FPI7Vo6EPFj4Wf2iwbWjYhmoB8ShIEAt9G7bHfURjkvtxmXn1oflKP4sWq+xcg4z51jX+vLCrsS7FpvhSUwksUJRC4gbLzM2yP7CNNsJFc0w6jj9bUphvAN8WSv3EQousfbzjD7TAycnfS2H2/Os1wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
