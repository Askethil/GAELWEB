<?php

namespace GaelBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends MasterController {
    public function indexAction()
    {
        return $this->render('GaelBundle:Default:index.html.twig');
    }
     public function articlesAction() {
        $articles = $this->getDoctrine()
                ->getManager()
                ->getRepository('GaelBundle:Articles')
                ->findAll();
        return $this->render(
                        'GaelBundle:article:articles.html.twig', array('articles' => $articles,
                        )
        );
    }
     public function detailArticleAction($idArt) {

     $article = $this->getDoctrine()
                ->getManager()
                ->getRepository('GaelBundle:Articles')
                ->find($idArt);
        return $this->render(
                        'GaelBundle:article:detailArticle.html.twig', array('article' => $article,
                        )
        );
    }

 
}
