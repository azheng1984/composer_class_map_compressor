<?php
ini_set("max_execution_time", 0); 

require __DIR__ . '/WebClient.php';

echo 'get';

$time_start = microtime(true);
//$s = curl_share_init();
//curl_share_setopt($s, CURLSHOPT_UNSHARE, CURL_LOCK_DATA_SSL_SESSION);
//$client->setOption(CURLOPT_SHARE, $s);
$client = new \Hyperframework\WebClient;
for ($i = 0; $i < 10000; ++$i) {
    echo '.';
//'https://i.mi.com/';
    $client->get('http://localhost/?skip=1');
}
$client->close();
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Did in $time seconds\n";
