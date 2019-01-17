<?php
/**
 * Created by PhpStorm.
 * User: petja
 * Date: 2019-01-16
 * Time: 19:24
 */

namespace App\Controllers;

use App\Templates;

class Error
{

    public function __construct($code)
    {

        $errors = [
            405 => 'HTTP method is not allowed',
            404 => 'Page not found',
            403 => 'Access forbidden',
        ];

        echo Templates::getInstance()->make('error', [
            'code' => $code,
            'error' => $errors[$code],
        ]);

        die;

    }

}
