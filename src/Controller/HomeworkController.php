<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeworkController extends AbstractController
{
    /**
     * @Route("/homework", name="homework")
     */
    public function index()
    {
        return $this->render('homework/index.html.twig', [
            'lessonnumber' => '8',
            'date' => '21/11/2019',
        ]);
    }

    /**
     * @Route("/homework/remember", name="remember")
     */
    public function remember()
    {
        return $this->render('homework/remember.html.twig', [
        ]);
    }
}


namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */

