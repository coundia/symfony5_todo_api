<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/api/hello/{name}", name="hello")
     */
    public function index(string $name="App"): Response
    {
        $response = new Response(
            'Content',
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
        $response->setContent(json_encode([
            'codeRetour' => 0,
            'messageRetour' => "Hello from $name",
        ]));
       // $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
