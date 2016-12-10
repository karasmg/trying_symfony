<?php
/**
 * Created by PhpStorm.
 * User: karasmg
 * Date: 10.12.2016
 * Time: 20:21
 */

namespace AppBundle\controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
            'notes' => $notes,
        ]);
    }
}