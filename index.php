<?php

header('Content-type: text/html; charset=UTF-8');
define('WORKPLACE', 'local');

$script_start_time=microtime(true);

require_once 'config.php';
require_once SYSTEM_DIR.'Core.php';


$script_exec_time=microtime(true)-$script_start_time;
printf('<div style="position:fixed; bottom:5px;right:5px; font-size: 11px;">Время выполнения: %f сек.</div>', $script_exec_time);

?>