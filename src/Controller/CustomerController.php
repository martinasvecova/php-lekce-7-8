<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer", name="customer")
     */

    public function index()
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/customer/details/{id}", name="details")
     */
    public function details($id)
    { if (ctype_digit($id)) {
        return $this->render('customer/details.html.twig', [
            'id' => $id,
        ]);}
    else {
        return $this->render('customer/chyba.html.twig', [
            'id' => $id,
        ]);}
    }
}
