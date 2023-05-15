<?php

declare(strict_types=1);

namespace App\Controller\Api\Plano;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\HttpServer\Annotation\AutoController;
// use function Hyperf\ViewEngine\view;

class ValorController
{

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return [
            "id" => "Valor"
        ];
    }
}
