<?php 

return [

	//optinos (mysql, sqlite)

	'driver' => 'sqlite',

	'sqlite' => [
		'host' => 'database.db',
		// 'charset' => 'utf8',
		// 'collation' => 'utf8_unicode_ci',
	],

	'mysql' => [
		'host' => 'localhost',
		'database' => 'curso microframework',
		'user' => 'root',
		'pass' => '123',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci'
	]
];

 ?>