<?php
/**
 * Created by PhpStorm.
 * User: petja
 * Date: 2019-01-16
 * Time: 22:58
 */

namespace App\Controllers;

use App\Templates;
use App\SQLiteConnection;

class Auth
{

    public function __construct($params)
    {

//        echo "<pre>\n";
//        var_dump($params);
//        echo "</pre>\n";
//        die;


        $db = (new SQLiteConnection())->connection;

//        $sql = 'SELECT login, password FROM users WHERE login = ';

        $login = $params['login'];

        $statement = $db->prepare('SELECT * FROM users WHERE login = :login;');
        $statement->bindValue(':login', $login);

        $result = $statement->execute();


        echo "<pre>\n";
        var_dump($result );
        echo "</pre>\n";
        die;



        echo Templates::getInstance()->make('error', [
            'code' => 777,
            'error' => 'agagagaga',
        ]);

        die;

    }

}
