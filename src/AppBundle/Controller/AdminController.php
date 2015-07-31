<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('admin_orders');
    }

    /**
     * @Route("/admin/objednavky", name="admin_orders")
     */
    public function orderAction()
    {
        return $this->render('admin/orders.html.twig');
    }

    /**
     * @Route("/admin/faktury", name="admin_invoices")
     */
    public function invoicesAction()
    {
        return $this->render('admin/invoices.html.twig');
    }
}
