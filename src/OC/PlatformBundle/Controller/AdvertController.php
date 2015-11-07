<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
        if ($page < 1) {
            throw new NotFoundHttpException(sprintf(
                'Page $s inexistante', $page
            ));
        }

        return $this->render('OCPlatformBundle:Advert:index.html.twig');
    }

    public function viewAction($id)
    {
        return $this->render('OCPlatformBundle:Advert:view.html.twig', [
            'id' => $id,
        ]);
    }

    public function addAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');

            return $this->redirectToRoute('oc_platform_view', [
                'id' => 5
            ]);
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    public function editAction($id, Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');

            return $this->redirectToRoute('oc_platform_view', [
                'id' => 5
            ]);
        }

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', [
            'id' => $id,
        ]);
    }

    public function deleteAction($id)
    {
        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }
}