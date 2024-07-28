<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=postgres',
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',
    'tablePrefix' => 'public.',
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
