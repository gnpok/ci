<?php

$CI = &get_instance();

if(!function_exists('get'))
{
	function get($name,$func = '')
	{
		global $CI;
		return empty($func) ? $CI->input->get($name) : $CI->input->get($name,$func);
	}
}

if(!function_exists('post'))
{
	function post($name,$func = '')
	{
		global $CI;
		return empty($func) ? $CI->input->post($name) : $CI->input->post($name,$func);
	}
}

if(!function_exists('view'))
{
	function view($template,$data = array())
	{
		global $CI;
		return $CI->load->view($template,$data);
	}	
}

if(!function_exists('loadmodel'))
{
	function loadmodel($model,$alias = '')
	{
		global $CI;
		return $CI->load->model($model,$alias);
	}
}

if(!function_exists('loadlibrary'))
{
	function loadlibrary($library)
	{
		global $CI;
		return $CI->load->library($library);
	}
}

if(!function_exists('loadhelper'))
{
	function loadhelper($helper)
	{
		global $CI;
		return $CI->load->helper($helper);
	}
}

if(!function_exists('loadconfig'))
{
	function loadconfig($config)
	{
		global $CI;
		return $CI->load->config($config);
	}
}