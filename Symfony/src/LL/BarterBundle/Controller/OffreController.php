<?php

// src/LL/BarterBundle/Controller/OffreController.php

namespace LL\BarterBundle\Controller;

use LL\BarterBundle\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use LL\BarterBundle\Form\OffreType;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OffreController extends Controller {

    public function indexAction() {

        return $this->render('LLBarterBundle:Offre:index.html.twig'
        );
    }

    public function addAction(Request $request) {

        $offre = new Offre();
        $form = $this->get('form.factory')->create(new OffreType(), $offre);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            $url = $this->generateUrl('view', array('id' => $offre->getId()));
            return new RedirectResponse($url);
        }

        return $this->render('LLBarterBundle:Offre:add.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function viewAction($id) {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('LLBarterBundle:Offre')
        ;

        $offre = $repository->find($id);

        return $this->render('LLBarterBundle:Offre:view.html.twig', array(
                    'offre' => $offre,
        ));
    }

}
