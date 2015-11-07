<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $url = $this->generateUrl('oc_platform_view', ['id' => 5 ]);

        return new Response(sprintf(
            "URL de l'annonce d'id 5 : %s",
            $url
        ));
    }

    public function viewAction($id)
    {
        return new Response(sprintf(
            "Affichage de l'annonce d'id %d",
            $id
        ));
    }

    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(sprintf(
            "On pourrait afficher l'annonce correspondant au slug
            %s créée en %s et au format %s",
            $slug,
            $year,
            $_format
        ));
    }
}