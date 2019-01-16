<?php
/**
 * Created by PhpStorm.
 * User: petja
 * Date: 2019-01-16
 * Time: 19:30
 */

namespace App;

use Jenssegers\Blade\Blade;


class Templates {

    private static $instance;

    public static function getInstance()
    {

        if (!self::$instance)
        {
            self::$instance = new Blade(['assets/views'], 'assets/views-cache');
        }

        return self::$instance;
    }
}
