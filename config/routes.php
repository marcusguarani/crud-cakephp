<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    // Application Route
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    // Login Route
    $routes->connect('/login', ['controller' => 'Mitla', 'action' => 'login']);
    $routes->connect('/user_settings', ['controller' => 'Mitla', 'action' => 'userSettings']);
    $routes->connect('/search_film', ['controller' => 'Mitla', 'action' => 'searchFilm']);

    $routes->fallbacks(DashedRoute::class);
});
