<?php
    $base_url = 'http';
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
        $base_url .= "s";
    }
    $base_url .= "://".$_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    if (!isset($_SERVER['PATH_INFO'])){
        $path_info = '';
    }else{
        $path_array = explode('/', $_SERVER['PATH_INFO']);
        $path_info = $path_array[1];
    }
?>