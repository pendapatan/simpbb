<?php

return [
    'class' => 'yii\db\Connection',
	'dsn' => 'mysql:host=localhost;dbname=belajar-yii',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
	
	'class' => 'apaoww\oci8\Oci8DbConnection',
	'dsn' => 'oci8:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=127.0.0.1)(PORT=1521))(CONNECT_DATA=(SID=xe)));charset=AL32UTF8;',
	'username' => 'yourdatabaseschemaname',
	'password' => 'databasepassword',
	'attributes' => [],
];
