<?php

namespace App;

class Config {
    /**
     * path to the sqlite file (from project public folder)
     */
    const PATH_TO_SQLITE_FILE = 'db/db.sqlite';

    public static function getSqliteFilePath ()
    {

    }

    /**
     * Function for flexibility
     *
     * @return array
     */
    public static function getRoutingScheme()
    {

        return [
            '/' => [
                'methods' => ['get'],
                'controller' => 'Index'
            ],
            'login' => [
                'methods' => ['get','post'],
                'controller' => 'Auth',
                'params' => [
                    'login' => [
                        'rule' => '/^[a-zA-Z][a-zA-Z0-9]{2,20}',
                        'errorMessage' => 'Login must begin from symbol and from symbols and digits'
                    ],
                    'password' => [
                        'rule' => '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/'], // AZaz09!@#$%
                    'errorMessage' => 'Password must contains symbols, digits and !@#$% special symbols'
                ]
            ],
            'errors/{\d+}' => [
                'methods' => ['get','post'],
                'controller' => 'Error'
            ],
            'task/new' => [
                'methods' => ['get'],
                'controller' => 'Task@new'
            ],
            'task/delete/{\d+}' => [
                'methods' => 'post',
                'controller' => 'Task@delete'
            ],
            'task/save/{\d+}' => [
                'methods' => 'post',
                'controller' => 'Task@save',
                'params' => [
                    'text' => '/[A-Z].*?[.!?]/s',
                    'username' => '[a-zA-Z][a-zA-Z0-9]+',
                    'email' => ''
                ]
            ]
        ];

    }

}
