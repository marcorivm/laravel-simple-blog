<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Query Logging
	|--------------------------------------------------------------------------
	|
	| By default, the SQL, bindings, and execution time are logged in an array
	| for you to review. They can be retrieved via the DB::profile() method.
	| However, in some situations, you may want to disable logging for
	| ultra high-volume database work. You can do so here.
	|
	*/

	'profile' => false,

	'default' => $_SERVER['LARAVEL_DRIVER'],

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| All of the database connections used by your application. Many of your
	| applications will no doubt only use one connection; however, you have
	| the freedom to specify as many connections as you can handle.
	|
	| All database work in Laravel is done through the PHP's PDO facilities,
	| so make sure you have the PDO drivers for your particlar database of
	| choice installed on your machine.
	|
	*/

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => 'application',
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => $_SERVER['DB1_HOST'].':'.$_SERVER["DB1_PORT"],
			'database' => $_SERVER['DB1_NAME'],
			'username' => $_SERVER['DB1_USER'],
			'password' => $_SERVER['DB1_PASS'],
			'charset'  => 'utf8',
			'prefix'   => '',
		),
	),
);