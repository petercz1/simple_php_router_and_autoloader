<?php
namespace your\project;

/**
 * simple no-framework skinny router
 */
class Router
{
    // this is where the magic happens.
    // this array marries up the path in the browser with a php file that does what you need.
    // The autoloader looks for eg 'gethome' as 'gethome.php', loads it, and then
    // lie 40 fires off the 'init()' method for the loaded class
    private $uri = [
        '/'=>'gethome',
        '/about'=>'getAbout',
        '/enrol'=> 'getRegister',
        '/thanks'=>'getThanks'
    ];

    /**
     * simple router
     * assumes that an autoloader is used
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
                // found the path, so set $matched to true to stop 404 being sent
                $matched = true;
            }
        }

        // if no match, send 404
        if (!$matched) {
            include($_SERVER['DOCUMENT_ROOT']. '/frontend/fourohfour.html');
        }
    }
}
