<?php
namespace your\project;

/**
 * simple no-framework skinny router
 */
class Router
{    
    private $uri = [
        '/'=>'gethome',
        '/api/getoptions'=>'getOptions',
        '/api/setoptions'=>'setOptions',
        '/api/getvideofilesinfo'=>'getVideoFilesInfo',
        '/api/processvideofilesinfo'=>'postVideoFiles'
    ];

    /**
     * simple router
     * assumes that the route and class are named the same
     * and that an autoloader is used
     *
     * @return void
     */
    public function init():void
    {
        // split uri from any params - they're in $_GET, $_POST or $_REQUEST
        $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
        $route = $uri_parts[0] ?? '/';

        // $matched used to send 404
        $matched = false;
        
        foreach ($this->uri as $routeKey => $routeValue) {
            if (preg_match("#^$routeKey$#", $route)) {
                $class = __NAMESPACE__ . '\\' . $routeValue;
                (new $class)->init();
                $matched = true;
            }
        }

        // if no match, send 404
        if (!$matched) {
            include($_SERVER['DOCUMENT_ROOT']. '/frontend/fourohfour.html');
        }
    }
}
