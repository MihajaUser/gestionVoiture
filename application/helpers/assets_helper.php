<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if(!function_exists('img_loader'))
	{
		function img_loader($name, $format)
		{
			return site_url()."assets/img/".$name.".".$format;
		}
	}

	if(!function_exists('slugify'))
	{
		function slugify($text)
		{
			$divider = '-';
			// replace non letter or digits by divider
			$text = preg_replace('~[^\pL\d]+~u', $divider, $text);

			// transliterate
			$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

			// remove unwanted characters
			$text = preg_replace('~[^-\w]+~', '', $text);

			// trim
			$text = trim($text, $divider);

			// remove duplicate divider
			$text = preg_replace('~-+~', $divider, $text);

			// lowercase
			$text = strtolower($text);

			if (empty($text)) {
				return 'n-a';
			}

			return $text;
		}
	}

	if(!function_exists('css_loader'))
	{
		function css_loader($name)
		{
			return site_url()."assets/css/".$name.".css";
		}
	}
	if(!function_exists('js_loader'))
	{
		function js_loader($name)
		{
			return site_url()."assets/js/".$name.".js";
		}
	}
	if(!function_exists('image_loader'))
	{
		function image_loader($name)
		{
			return site_url()."assets/images/".$name;
		}
	}
	if(!function_exists('assets_loader'))
	{
		function assets_loader($name)
		{
			return site_url()."assets/".$name;
		}
	}
?>