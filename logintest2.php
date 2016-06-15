<?php

$username = 'info@aslanapartments.com';
$password = 'agag2407!!';
$loginUrl = 'https://www.airbnb.com/?mr=f';
 
//init curl
$ch = curl_init();
 
//Set the URL to work with
curl_setopt($ch, CURLOPT_URL, $loginUrl);
 
// ENABLE HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);
 
//Set the post parameters
//curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$username.'&password='.$password);
 
//Handle cookies for the login
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
 
//Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
//not to print out the results of its query.
//Instead, it will return the results as a string return value
//from curl_exec() instead of the usual true/false.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//execute the request (the login)
$store = curl_exec($ch);



echo "<p>";
return $store;

//the login is now done and you can continue to get the
//protected content.
 
//set the URL to the protected file
curl_setopt($ch, CURLOPT_URL, 'https://www.airbnb.com/rooms/2635196/calendar');
 
//execute the request
$content = curl_exec($ch);

curl_close($ch);

return $content;
 


//save the data to disk
//file_put_contents('~/download.zip', $content);

?>