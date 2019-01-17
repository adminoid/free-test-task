<?php

namespace App;

use App\Controllers\Error;
use App\Controllers\Page;


class Router
{

    public $path, $query, $method, $backPath, $validParam;

    public function __construct()
    {

        if (array_key_exists('SCRIPT_NAME', $_SERVER)) {
            $path = $_SERVER['SCRIPT_NAME'];
            if ($path === '/' || $path === '/index.php') {
                new Page('index');
                die;
            }
            $this->path = ltrim($path, '/') ?: '/';
        }

        $realFilePath = getcwd() . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $this->path;

        if (file_exists($realFilePath)) {
            header('Content-Type: text/css');
            readfile($realFilePath);
            die;
        }

        $queryString = '';
        if (array_key_exists('QUERY_STRING', $_SERVER)) {
            $queryString = $_SERVER['QUERY_STRING'];
        }

        $currentUrl = '/';
        if (array_key_exists('REQUEST_URI', $_SERVER)) {
            $currentUrl = $_SERVER['REQUEST_URI'];
        }

        parse_str($queryString, $parsedArray);
        $this->query = $parsedArray;

        $this->saveFallback($currentUrl);

    }

    private function saveFallback($fallBackUrl)
    {
        $_SESSION['fallback'] = $this->backPath = $fallBackUrl;
    }

    public function dump()
    {
        return [
            'path' => $this->path,
            'query' => $this->query,
        ];
    }

    public function runController()
    {

        $routes = Config::getRoutingScheme();

        if ($this->path === '/' || $this->path === 'index.php') {

            new Page('index');

        }

        if (array_key_exists($this->path, $routes)) {

            $routeData = $routes[$this->path];
            $this->validate($routeData);

        } else {

            new Error(404);

        }

    }

    private function validate($data)
    {

        if (
            array_key_exists('REQUEST_METHOD', $_SERVER) &&
            !in_array(strtolower($_SERVER['REQUEST_METHOD']), $data['methods'], false)
        ) {
            new Error(405);
        }

        $bad_keys = array_diff(array_keys($_REQUEST), array_keys($data['params']));
        $validParam =array_diff_key($_REQUEST,array_flip($bad_keys));

        $this->validParam = $validParam;

    }

}
