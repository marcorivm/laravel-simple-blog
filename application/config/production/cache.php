<?php
/**
TODO: Configure memcached
/**/
return array(

	/*
	|--------------------------------------------------------------------------
	| Cache Driver
	|--------------------------------------------------------------------------
	|
	| The name of the default cache driver for your application. Caching can
	| be used to increase the performance of your application by storing any
	| commonly accessed data in memory, a file, or some other storage.
	|
	| A variety of great drivers are available for you to use with Laravel.
	| Some, like APC, are extremely fast. However, if that isn't an option
	| in your environment, try file or database caching.
	|
	| Drivers: 'file', 'memcached', 'apc', 'redis', 'database'.
	|
	*/

	//'driver' => 'memcached',

	/*
	|--------------------------------------------------------------------------
	| Memcached Servers
	|--------------------------------------------------------------------------
	|
	| The Memcached servers used by your application. Memcached is a free and
	| open source, high-performance, distributed memory caching system. It is
	| generic in nature but intended for use in speeding up web applications
	| by alleviating database load.
	|
	| For more information, check out: http://memcached.org
	|
	*/

	/**
	
	'memcached' => array(

		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),

	),	
	
	/**/

);