<?php
$access_token = 'qRujes6Bgimxxh89m5tVqWzQhY0O1pY6+EmnQuhEsCKffHIgcWrILViW1HObnVDDD5qBsnix/jwZoRjGY24WA6UnDzDa6aNWVQMwUh6Rn/CvUKVE1h5fVuOMapfYxW28HgHq1P4LJAHR/VACp1aJowdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;