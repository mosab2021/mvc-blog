<?php

$base_url = 'http://localhost/mvc-blog/';
$base_dir = '/mvc-blog/';

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir, '', $tmp[0]);
unset($tmp);



//database Config
$dbHost = 'localhost';
$dbName = 'mvc_blog';
$dbUsername = 'root';
$dbPassword = '';