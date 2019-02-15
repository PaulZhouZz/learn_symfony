<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\LuckyController;

$routes = new RouteCollection();
$routes->add('blog_list', new Route('/lucky/number', [
    '_controller' => [LuckyController::class, 'number']
]));

return $routes;