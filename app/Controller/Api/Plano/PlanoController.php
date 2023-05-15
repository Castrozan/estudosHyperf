<?php

declare(strict_types=1);

namespace App\Controller\Api\Plano;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

use App\Api\Plano\PlanoValidate;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

use Hyperf\Validation\Contract\ValidatorFactoryInterface;

class PlanoController
{
    #[Inject]
    private PlanoValidate $planoValidate;

    #[Inject]
    protected ValidatorFactoryInterface $validationFactory;

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        // $data = [
        //     "id" => $request->header('id', $default)
        //     "text" => $request->header('text', $default)
        // ];

        // print_r($request->input("text"));
        
        $validator = $this->validationFactory->make($request->all(), $this->planoValidate->rules());

        if($validator->fails()){
           return $validator->errors();
        }

        return [
            "id" => $request->header('id'),
            "text" => $request->header('text')
        ];
    }
}
