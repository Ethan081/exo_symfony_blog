<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MapController extends AbstractController
{
    //je cree une route pour arriver sur ma page map
    /**
     * @Route("/map", name="map")
     */
    public function map(Request $request)
    {
        //je recupere la valeur de ma  query 'lang' et l assigne a ma variable $lang.
        $lang = $request->query->get('lang');

        //je recupere mon fichier twig de mon templete et le compile en lui injectant les infos de ma variable lang.
        return $this->render("map.html.twig",
            [
                'lang'=>$lang
            ]
        );
    }
}