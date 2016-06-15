<?php

$loginurl = "http://acis.acischools.k12.tr/Account/Login";
$path = $_SERVER["DOCUMENT_ROOT"]."/learning/ctemp";
$cookietxt = $path."/cookie.txt";
$cookietxt2 = $path."/cookie2.txt";
$username = 'demirozcakir';
$password = '2407';


echo $path;
echo "<p>";

echo $cookietxt;
echo "<p>";

echo $loginurl;
echo "<p>";
 
//init curl
$ch = curl_init();
//set url to login
curl_setopt($ch, CURLOPT_URL, $loginurl);
//enable HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);
//set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$password);
//handle cookies for the login
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookietxt);
//curl_setopt($ch, CURLOPT_COOKIEFILE, $cookietxt);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_REFERER, $loginurl);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

//Set the URL to work with
$html = curl_exec($ch);

$url = "http://acis.acischools.k12.tr/tr-Tr/VBS/GayretBasariOrtalamalari";

curl_setopt($ch, CURLOPT_URL, $url);

$html2 = curl_exec($ch);

var_dump(curl_getinfo($ch));

// Error detection and print the error on screen
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

echo $html2;

?>