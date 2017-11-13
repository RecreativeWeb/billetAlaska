<?php

namespace RecreativeWeb\HomeBundle\Controller;

use RecreativeWeb\HomeBundle\Entity\Billet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$billets = $em->getRepository(Billet::class)->findAll();

        return $this->render('RecreativeWebHomeBundle::Default/index.html.twig',compact('billets'));
    }
}
