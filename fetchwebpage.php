<?php

$url = "https://www.airbnb.com/?mr=f";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
$out = curl_exec($ch);
curl_close($ch);

echo $out;
?> 