<?php
/**
 * Created by PhpStorm.
 * User: petja
 * Date: 14/01/2019
 * Time: 5:03 PM
 */

namespace App;

class SQLiteConnection {

    private $pdo;

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo === null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;
    }
}
