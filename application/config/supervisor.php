<?php


// Dashboard columns. 2 or 3
$config['supervisor_cols'] = 3;

// Refresh Dashboard every x seconds. 0 to disable
$config['refresh'] = 10;

// Enable or disable Alarm Sound
$config['enable_alarm'] = true;

// Show hostname after server name
$config['show_host'] = false;

$config['supervisor_servers'] = array(
	'phpcli02.ofertixlinux.corp' => array(
		'url' => 'http://phpcli02.ofertixlinux.corp/RPC2',
		'port' => '9001',
	),
        'phpcli03.ofertixlinux.corp' => array(
                'url' => 'http://phpcli03.ofertixlinux.corp/RPC2',
                'port' => '9001',
        ),
        'phpcli04.ofertixlinux.corp' => array(
                'url' => 'http://phpcli04.ofertixlinux.corp/RPC2',
                'port' => '9001',
        ),
        'phpcli05.ofertixlinux.corp' => array(
                'url' => 'http://phpcli05.ofertixlinux.corp/RPC2',
                'port' => '9001',
        ),
        'phpcli06.ofertixlinux.corp' => array(
                'url' => 'http://phpcli06.ofertixlinux.corp/RPC2',
                'port' => '9001',
        ),
        'diagonal-427-master' => array(
                'url' => 'http://10.8.0.228/RPC2',
                'port' => '9001',
        ),
        'diagonal-427-slave' => array(
                'url' => 'http://10.8.0.229/RPC2',
                'port' => '9001',
        ),
        'diagonal-445-master' => array(
                'url' => 'http://10.8.0.226/RPC2',
                'port' => '9001',
        ),
        'diagonal-445-slave' => array(
                'url' => 'http://10.8.0.227/RPC2',
                'port' => '9001',
        ),
        'tienda-sant-just' => array(
                'url' => 'http://192.168.2.178/RPC2',
                'port' => '9001',
        ),

);

// Set timeout connecting to remote supervisord RPC2 interface
$config['timeout'] = 3;

// Path to Redmine new issue url
$config['redmine_url'] = 'http://redmine.url/path_to_new_issue_url';

// Default Redmine assigne ID
$config['redmine_assigne_id'] = '69';


