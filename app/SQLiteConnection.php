<?php
/**
 * Created by PhpStorm.
 * User: petja
 * Date: 14/01/2019
 * Time: 5:03 PM
 */

namespace App;

use \PDO, \PDOException;

class SQLiteConnection {

    public $connection;

    public function __construct()
    {
        try
        {
            $databaseFile = 'sqlite:' . Config::PATH_TO_SQLITE_FILE;

            $pdo = new PDO($databaseFile,'','', [
                PDO::ATTR_PERSISTENT => true
            ]);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $pdo;

        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
