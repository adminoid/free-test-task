<?php

require '../vendor/autoload.php';

use App\SQLiteConnection;
use Jenssegers\Blade\Blade;

$db = (new SQLiteConnection())->connection;

$sql = 'SELECT login, password FROM users';

//foreach ($db->query($sql) as $row)
//{
//    var_dump($row);
//}

$blade = new Blade(['../assets/views'], '../assets/views-cache');

echo $blade->make('index', ['name' => 'John Doe']);

$dbh = null;
