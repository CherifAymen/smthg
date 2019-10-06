<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AminaController extends Controller
{
    /**
     * @Route("/amina", name="amina")
     */
    public function index()
    {
        return new Response("this is a controller route !!") ;
    }
}
