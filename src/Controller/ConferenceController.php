<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/hello/{name}', name: 'homepage')]
    public function index(Request $request,string $name = '',): Response
    {
//        return $this->render('conference/index.html.twig', [
//            'controller_name' => 'ConferenceController',
//        ]);
        dump($request);
        $greet = '';
        if ($name){
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
<html lang="en">
    <body>
    $greet
        <img src="/images/cons.png"  alt="">
    </body>
</html>
EOF
);
    }
}
