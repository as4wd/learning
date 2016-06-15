<?php

$url = "https://www.airbnb.com/login";
$path = $_SERVER["DOCUMENT_ROOT"]."/learning/ctemp";
$cookietxt = $path."/cookie.txt";
$username = 'info@aslanapartments.com';
$password = 'agag2407!!';

echo $path;
echo "<p>";

echo $cookietxt;
echo "<p>";

echo $url;
echo "<p>";
 
//init curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookietxt);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookietxt);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$password);

//Set the URL to work with

$html = curl_exec($ch);

//var_dump(curl_getinfo($ch));

// Error detection and print the error on screen
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

echo $html;

?>