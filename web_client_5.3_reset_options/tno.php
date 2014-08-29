<?php
ini_set("max_execution_time", 0); 

require __DIR__ . '/WebClient.php';

$time_start = microtime(true);
echo 'sa';
for ($i = 0; $i < 10000; ++$i) {
    \Hyperframework\WebClient::sendAll(array('http://localhost/?skip=1'), function ($req, $res){
        echo '.';
        //$req['client']->close();
    });
}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Did in $time seconds\n";
