<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');

define('DIRSEP', DIRECTORY_SEPARATOR);



$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1));
$css_path = $url_root . '/css/Standard.css';
define('CSS_PATH', $css_path);
define('APP_NAME', 'M2M Application');
define('LANDING_PAGE', $_SERVER['SCRIPT_NAME']);
define('SEND_MESSAGE', 'Send messsage ->');
define('READ_MESSAGE', 'Read message ->');

$wsdl = 'https://m3mconnect.ee.co.uk/orange-soap/Services/messagesServiceByCountry?WSDL';
define('WSDL', $wsdl);

$settings = [
    "settings" =>[
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'mode' => 'development',
        'class_path' => __DIR__ . '/src/',
        'view' =>[
        'template_path' => __DIR__ . '/templates/',
        'twig' => [
           'cache' => __DIR__ . '/cache/twig',
           'auto_reload' => true,
            ]],




    ]

];