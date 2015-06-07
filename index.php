<?php

require('helpers\libs\Smarty.class.php');
$smarty = new Smarty();

$url  = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
echo $url[1];
