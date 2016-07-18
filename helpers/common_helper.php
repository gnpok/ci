<?php

$CI = &get_instance();

if (!function_exists('get')) {
    /**
     * get获取值
     *
     * @param        $name
     * @param string $func
     *
     * @return mixed
     */
    function get( $name, $func = '' )
    {
        global $CI;

        return empty($func) ? $CI->input->get($name) : $CI->input->get($name, $func);
    }
}

if (!function_exists('post')) {
    function post( $name, $func = '' )
    {
        global $CI;

        return empty($func) ? $CI->input->post($name) : $CI->input->post($name, $func);
    }
}

if (!function_exists('view')) {
    /**
     * 加载视图
     *
     * @param       $template
     * @param array $data
     *
     * @return mixed
     */
    function view( $template, $data = array () )
    {
        global $CI;

        return $CI->load->view($template, $data);
    }
}

if (!function_exists('parse')) {
    /**
     * 模版解析类
     * @param       $template
     * @param array $data
     * @param bool  $return FALSE将内容输出到页面，TRUE将内容返回不进行输出
     *
     * @return mixed
     */
    function parse( $template, $data = [], $return = FALSE )
    {
        global $CI;
        $CI->load->library('parser');

        return $CI->parser->parse($template, $data, $return);
    }
}

if (!function_exists('loadmodel')) {
    /**
     * 加载数据库模型
     *
     * @param        $model
     * @param string $alias
     *
     * @return mixed
     */
    function loadmodel( $model, $alias = '' )
    {
        global $CI;

        return $CI->load->model($model, $alias);
    }
}

if (!function_exists('loadlibrary')) {
    function loadlibrary( $library )
    {
        global $CI;

        return $CI->load->library($library);
    }
}

if (!function_exists('loadhelper')) {
    function loadhelper( $helper )
    {
        global $CI;

        return $CI->load->helper($helper);
    }
}

if (!function_exists('loadconfig')) {
    function loadconfig( $config )
    {
        global $CI;

        return $CI->load->config($config);
    }
}