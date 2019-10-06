<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends Controller
{
    /**
     * @Route("/room/list/", name="room_index")
     */
    public function index()
    {
        return $this->render('article/room_index.html.twig', [
            'controller_name' => 'RoomController',
        ]);
    }
}
