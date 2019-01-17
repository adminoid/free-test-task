<?php
/**
 * Created by PhpStorm.
 * User: petja
 * Date: 2019-01-16
 * Time: 22:58
 */

namespace App\Controllers;

use App\Templates;

class Page
{

    public function __construct($template)
    {

        echo Templates::getInstance()->make('error', [
            'code' => 777,
            'error' => 'agagagaga',
        ]);

        die;

    }

}
