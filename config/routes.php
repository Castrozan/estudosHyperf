<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;
use function Hyperf\ViewEngine\view;

// Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
// Router::addRoute(['GET', 'POST', 'HEAD'], '/test', 'App\Controller\ViewController@index');

// Router::addGroup('/api/plano', function () {
//     Router::addRoute(['GET', 'POST', 'HEAD'], '/plano', 'App\Controller\Api\Plano\PlanoController@index');
//     Router::addRoute(['GET', 'POST', 'HEAD'], '/valor', 'App\Controller\Api\Plano\ValorController@index');
// });

// Router::get('/favicon.ico', function () {
//     return 'aabbbb';
// });

Router::get('/', 'App\Controller\IndexController@index');

Router::get('/greeting', function () {
    return view('child');
});

Router::get('/gerarPdf', 'App\Controller\Api\GerarPdfController@index');
