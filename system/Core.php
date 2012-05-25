<?php

function loadGlobalConfig()
{
	$cfg_file='system/'.WORKPLACE.'.cfg.php';

	if(is_file($cfg_file))
	{
		include $cfg_file;
		return true;
	}
	
	return false;
}

function show404()
{
	echo '404';
	exit();
}

?>