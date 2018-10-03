<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {
    
    /**
     * @Route("/")
     */
   
    public function homepage() {
        return new Response('OMG this is My First page');
    }
    
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug) {
//        return new Response(sprintf(
//                        'Future page to show the article: %s', $slug
//        ));        
        $comments = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'Proin in tortor et erat viverra rutrum eu quis justo.',
            'Praesent est enim, faucibus non tempor a, facilisis et magna.',
            'In sed rutrum orci. Etiam tristique at lacus vel porta.'
        ];
//        dump($slug,$this);
        return $this->render('article/show.html.twig',[
           'title' => ucwords(str_replace('-', '', $slug)), 
            'comments' => $comments,
        ]);
    }

}
