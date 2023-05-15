<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Dompdf\Dompdf;
use function Hyperf\ViewEngine\view;

class GerarPdfController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('exemplotables'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        return $response->raw($dompdf->output())->withHeader('Content-Type', 'application/pdf');
    }
}
