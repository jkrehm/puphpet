<?php

namespace Puphpet\Extension\SolrBundle\Controller;

use Puphpet\MainBundle\Extension;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        return $this->render('PuphpetExtensionSolrBundle::form.html.twig', [
            'solr' => $data,
        ]);
    }
}
