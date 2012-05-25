<?php

function loadGlobalConfig()
{
	$cfg_file=SYSTEM_DIR.WORKPLACE.'DB.cfg.php';

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

function autoload($class_name)
{
	$class_file=CLASS_DIR.$class_name.'.class.php';
	if(is_file($class_file))
	{
		require_once $class_file;
		return true;
	}

	echo '<div>Ошибка загрузки файла класса <b>'.$class_name.'</b><br />Файл <b>'.$class_file.'</b> не найден!</div>';
}

if(function_exists('spl_autoload_register'))
{
    spl_autoload_register('autoload');
}
else
{
    function __autoload($class_name)
    {
        return autoload($class_name);
    }
}

//Загрузка конфига базы
if(!loadGlobalConfig())
{
	show404();
}

?>