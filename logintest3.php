<?php

$username = "info@aslanapartments.com";
$password = "agag2407!!";


curl_login('https://www.airbnb.com/authenticate', '"email=".$username."&password=".$password', '', 'off');

echo curl_grab_page('https://www.airbnb.com/manage-listing/2375044/calendar/','','off');


function curl_login($url, $data, $proxy, $proxystatus)
{

$fp=fopen("cookie.txt",	"w");
fclose($fp);

$login=curl_init();
curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
curl_setopt($login, CURLOPT_USERAGENT,
    "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");

curl_setopt($login, CURLOPT_RETURNTRANSFER, 1);

if ($proxystatus !== 'on') {

		curl_setopt($login, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($login, CURLOPT_HTTPPROXYTUNNEL, TRUE);
		curl_setopt($login, CURLOPT_PROXY, $proxy);
		}

curl_setopt($login, CURLOPT_URL, $url);
curl_setopt($login, CURLOPT_HEADER, TRUE);
curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($login, CURLOPT_POST, TRUE);
curl_setopt($login, CURLOPT_POSTFIELDS, $data);

ob_start();
return curl_exec($login);
ob_end_clean();
curl_close($login);
unset($login);
}


function curl_grab_page($site,$proxy,$proxystatus)
{
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
if ($proxystatus !== 'on') {

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, TRUE);
		curl_setopt($ch, CURLOPT_PROXY, $proxy);
		}

	curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
	curl_setopt($ch, CURLOPT_URL, $site);

	ob_start();

	return curl_exec($ch);

	ob_end_clean();
	curl_close($ch);


}

















?>