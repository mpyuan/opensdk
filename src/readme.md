<?php
/**
*力方开放平台 PHP调用示例
*适用于PHP5.1.2及以上版本
*/
header("Content-type:text/html; charset=utf-8");
require("OpenSdk.php");

$loader  = new QmLoader;
$loader  -> autoload_path  = array(CURRENT_FILE_DIR.DS."client");
$loader  -> init();
$loader  -> autoload();

$client  = new OpenClient;
$client  -> appKey =  "test";
$client  -> appSecret =  "test";
$accessToken  = "test";

$req  = new ItemGetRequest;
$req  -> setFields("title,price");
$req  -> setNumIid("p17080");
$res  = $client ->  execute($req, $accessToken);

print_r(json_encode($res));