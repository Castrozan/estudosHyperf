<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\HttpServer\Annotation\AutoController;
use function Hyperf\ViewEngine\view;

class ViewController
{
    #[AutoController(prefix: "view")]
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return view('child');
    }
}
