<?php
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
    $encrypt_key = '69h3OCfXtY9B3cJJ5b9JURzA37q18kt0';//32-bit string

    $config                               = array();
    $config['dbc']                        = array();
    $config['site_meta']                  = array();
    $config['site_meta']['title']         = '::AZUFO::';
    $config['site_meta']['desc']          = 'AZUFO';
    $config['site_meta']['author']        = 'Christopher Hacia';
    $config['site_meta']['shortcut_icon'] = './assets/yin-yang.png';


    //database credentials
    $db1 = array(
        'user'=>'',
        'pass'=>'',
        'host'=>'',
        'conn'=>''
    );
    array_push($config['dbc'],$db1);

?>