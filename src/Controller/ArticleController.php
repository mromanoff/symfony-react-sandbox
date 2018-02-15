<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        $title = 'Home Page';

        return $this->render('home/index.html.twig', [
            'title' => $title
        ]);
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [

            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,

        ]);

    }

}

