<?php
/**
 * Created by PhpStorm.
 * User: wanda
 * Date: 2018/4/12
 * Time: 下午4:30
 */
require_once '../vendor/autoload.php';
$appId="";
$appKey="";
$secretKey="";
$StringOperation=new String\StringOperation();
echo $StringOperation::uuid()."\r\n";
