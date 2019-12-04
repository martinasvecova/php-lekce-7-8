<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookListingController extends AbstractController
{
    /**
     * @Route("/booklisting", name="book_listing")
     */
    public function index()
    {
        return $this->render('book_listing/index.html.twig', [
            'controller_name' => 'BookListingController',
        ]);
    }

    /**
     * @Route("/booklisting/century", name="book_listing_century")
     */

    public function century (BookRepository $booksByCentury)
    {
        return $this->render('book_listing/century.html.twig', [
            'booksByCentury' => $booksByCentury->findByCentury(),
        ]);
    }

    /**
     * @Route("/booklisting/author", name="book_listing_author")
     */

    public function author (BookRepository $booksByAuthor)
    {
        return $this->render('book_listing/author.html.twig', [
            'booksByAuthor' => $booksByAuthor->findByAuthor()
        ]);
    }

    /**
     * @Route("/booklisting/price", name="book_listing_price")
     */

    public function price (BookRepository $booksByPrice)
    {
        return $this->render('book_listing/price.html.twig', [
            'booksByPrice' => $booksByPrice->findByPrice()
        ]);
    }

    /**
     * @Route("/booklisting/new", name="book_listing_new")
     */

    public function new (BookRepository $booksNew)
    {
        return $this->render('book_listing/new.html.twig', [
            'booksNew' => $booksNew->findNew()
        ]);
    }


}
