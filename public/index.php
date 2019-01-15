<?php

require '../vendor/autoload.php';

use App\SQLiteConnection;

$db = (new SQLiteConnection())->connection;

$sql = 'SELECT login, password FROM users';

foreach ($db->query($sql) as $row)
{
    echo "<pre>";
    var_dump($row);
    echo "</pre>";
}
$dbh = null;
