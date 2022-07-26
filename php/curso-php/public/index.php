<?php

ini_set('display_errors',1);
ini_set('display_starup_error',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use app\models\job;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'curso php',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

/* var_dump($request->getUri()->getPath());
 */
use Aura\Router\RouterContainer;

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();

$map->get('index', '/cursos/php/curso-php/', '../index.php');
$map->get('addjob', '/cursos/php/curso-php/job/add', '../addjob.php');

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route){
    echo 'no router';
} else{
    require $route->handler;
}

/* $route = $_GET['route'] ?? '/';

if ($route == '/'){
require '../index.php';
} elseif ($route =='addjob') {
    require '../addjob.php';
} */

?>