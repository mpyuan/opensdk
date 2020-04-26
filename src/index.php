<?php
/**
*力方开放平台 PHP调用示例
*适用于PHP5.1.2及以上版本
*/
header("Content-type:text/html; charset=utf-8");
require("OpenSdk.php");


$client  = new OpenClient;
$client  -> appKey =  "test";
$client  -> appSecret =  "test";
$accessToken  = "test";

$req  = new BmRechargeMobilePayBillRequest;
$req->setMobileNo("phoneNumber");
$req->setRechargeAmount("10");
$res  = $client ->  execute($req, $accessToken);

print_r(json_encode($res,JSON_UNESCAPED_UNICODE));