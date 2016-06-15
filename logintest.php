<?php

//username and password of account
$username = 'info@aslanapartments.com';
$password = 'agag2407!!';
//$authenticity_token = 'V4$.airbnb.com$oXrjix_RJOY$HeUsEl1kzH7TASALpKu6qtu_IyjsPkYQsm5GKft6ciI=';
//$postfields = "user=".$username."&password=".$password."&authenticity_token=".$authenticity_token;

//echo ("POSTFIELDS=");
//echo $postfields;

$url = 'https://www.airbnb.com/login/';
echo $url;
echo "<p>";
 
//init curl
$ch = curl_init();

curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//Set the URL to work with
curl_setopt($ch, CURLOPT_URL, $url);
$html = curl_exec($ch);

echo $html;


$search = "input name=\"authenticity_token\" type=\"hidden\" value=\"(.*?)</[^>]+>/i";
echo $search;
preg_match($html, $search, $authenticity_token);
echo "<p>";
echo $authenticity_token;


 
// ENABLE HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);
 
//Set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'user='.$username.'&pass='.$password);
 
//Handle cookies for the login
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
 
//Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
//not to print out the results of its query.
//Instead, it will return the results as a string return value
//from curl_exec() instead of the usual true/false.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//execute the request (the login)
$store = curl_exec($ch);

echo $store;
 
//the login is now done and you can continue to get the
//protected content.
 
//set the URL to the protected file
curl_setopt($ch, CURLOPT_URL, 'http://www.example.com/protected/download.zip');
 
//execute the request
$content = curl_exec($ch);
 
//save the data to disk
//file_put_contents('~/download.zip', $content);





$authenticity_token = "";

//set the directory for the cookie using defined document root var
// echo $_SERVER["DOCUMENT_ROOT"];

$path = $_SERVER["DOCUMENT_ROOT"]."/learning/ctemp";
echo "<p>";
echo $path;
echo "<p>";

//build a unique path with every request to store 
//the info per user with custom func. 
//$path = build_unique_path($dir);

//login form action url
$url="https://www.airbnb.com/login"; 
$postinfo = "email=".$username."&password=".$password."&authenticity_token=".$authenticity_token;

$cookie_file_path = $path."/cookie.txt";
echo $cookie_file_path;

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_NOBODY, false);
//curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
curl_setopt($ch, CURLOPT_USERAGENT,
    "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
curl_exec($ch);

//page with the content I want to grab
//curl_setopt($ch, CURLOPT_URL, "https://www.airbnb.com/manage-listing/2375044/calendar/");
//do stuff with the info with DomDocument() etc

//$html = curl_exec($ch);
//echo "<p>";
//echo $html;

curl_setopt($ch, CURLOPT_URL, "https://www.airbnb.com/authenticate");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $username);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $password);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$username.'&password='.$password."&authenticity_token=".$authenticity_token);

curl_setopt($ch, CURLOPT_URL, "https://www.airbnb.com/manage-listing/2375044/calendar/");


$html2 = curl_exec($ch);
echo "<p>";
echo $html2;





curl_close($ch);
//return $html;





?>