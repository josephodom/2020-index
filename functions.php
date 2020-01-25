<?php

/**
 * A few basic functions to make this page run a little smoother
 */

function urlBase()
{
	$domain = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['SERVER_NAME'];
	
	$path = $_SERVER['SCRIPT_NAME'];
	$path = explode('/index.php', $path);
	$path = array_shift($path);
	
	return $domain . $path . '/';
}

/**
 * Returns a <pre>-wrapped print_r of all of the params you pass
 *
 * @return string
 */
function debug() : string
{
	ob_start();
	
	echo '<pre>';
	
	foreach(func_get_args() as $arg)
	{
		print_r($arg);
	}
	
	echo '</pre>';
	
	return ob_get_clean();
}

/**
 * Get the output of a template part
 *
 * @param string $template Path to the tempalte between `views/` and `.php`
 * @param array $params Associative array of variables that become local to the template's scope
 * @return string
 */
function view(string $template, array $params = []) : string
{
	$template = 'views/' . $template . '.php';
	
	extract($params);
	
	ob_start();
	
	include $template;
	
	return ob_get_clean();
}

?>