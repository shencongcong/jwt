<?php
/**
 * Created by PhpStorm.
 * User: danielshen
 * Date: 2019/8/1
 * Time: 14:21
 */

require(dirname(__DIR__) . '/vendor/autoload.php');

$jwt = \Shencongcong\Jwt\Jwt::getInstance('123');

$token = $jwt->getToken(['11'=>22]);
var_dump($token);

