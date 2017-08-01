<?php

namespace Agicite\ScrutinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ScrutinController extends Controller {

    public function indexAction() {
        return $this->render('AgiciteScrutinBundle:Scrutin:index.html.twig');
    }

    public function viewAction($id) {
        return new Response("Affichage de l'annonce d'id : " . $id);
    }

}
