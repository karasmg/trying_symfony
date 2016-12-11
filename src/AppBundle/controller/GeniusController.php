<?php
/**
 * Created by PhpStorm.
 * User: karasmg
 * Date: 10.12.2016
 * Time: 20:21
 */

namespace AppBundle\controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class GeniusController extends Controller
{
    /**
     * @Route("/genius/{param1}")
     */
    public function showAction($param1){
        /*
        $templating = $this->container->get('templating');
        $html = $templating->render('genius/show.html.twig', [
            'name' => $param1,
        ]);

        return new Response($html);
        */
        $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        return $this->render('genius/show.html.twig', [
            'name' => $param1,
        ]);
    }

    /**
     * @Route("/genius/{param1}/notes")
     * @Method("GET")
     */
    public function getNotesAction(){
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            'notes' => $notes
        ];

        return new JsonResponse($data);
    }
}