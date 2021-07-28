<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Libraries\Router;
use App\Libraries\Request;

require 'app/Core/bootstrap.php';

require 'app/Core/core.php';

$route = Router::load('routes.php')->direct(Request::uri(), Request::method());

require $route['uri'];

$class = new $route['class'];
$function = $route['function'];

if (!Request::ajax())
{
    // Load the HTML header
    require 'views/layouts/head.view.php';

    // Inject code from controller
    echo $class->$function();

    // Close it with the bottom end </body> and </html> tags
    require 'views/layouts/bottom.view.php';
} else {
    echo $class->$function();
}