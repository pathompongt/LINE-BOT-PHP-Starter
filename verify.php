$proxy = 'http://fixie:q4j272TRdffJrcQ@velodrome.usefixie.com:80';
$proxyauth = 'pathompong@yellow-idea.com:Poringjung1';

<?php
$access_token = 'vVWfd98+M9yVZT9du4UcFMCY4fSRSiSBsO+a1q9GCnrMwYRnSS/dkHMwPGkOgkhGqUOaewTC+KlJRjyLWzB/ARcwMu3xKA6kXzILFHliQE0bhORT/K4vKTUukRcKkVvfUEzChhB1Qn+EpeYl5uJqqQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
