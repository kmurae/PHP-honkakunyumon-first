<?php

$t = true;
$f = false;

$t && print (1) . PHP_EOL; // 表示される
$f && print (2) . PHP_EOL; // 表示ない
$t || print (3) . PHP_EOL; // 表示ない
$f || print (4) . PHP_EOL; // 表示される

define('URL_BASE', 'http://www.example.com');

defined('URL_BASE') || defined('URL_BASE', 'http://default.example.com');

echo ('<pre>');
var_dump(URL_BASE);
echo ('</pre>');
