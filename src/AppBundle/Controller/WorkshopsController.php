<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WorkshopsController extends Controller
{
    /**
     * @Route("/kurzy", name="workshops")
     */
    public function indexAction()
    {
        return $this->render('workshops/index.html.twig');
    }
}
