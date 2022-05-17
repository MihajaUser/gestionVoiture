<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if(!function_exists('update_caches'))
	{
		function update_caches($path,$text)
		{
			$fp=fopen($path,"w+");
			fputs($fp,$text);
			fclose($fp);
		}
	}
?>