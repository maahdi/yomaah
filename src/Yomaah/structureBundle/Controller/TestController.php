<?php

namespace Yomaah\structureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Yomaah\structureBundle\Entity\Article;
use Yomaah\structureBundle\Entity\Page;
use Yomaah\structureBundle\Entity\Png;

class TestController extends Controller
{
    public function accueilAction()
    {
        $token = $this->get('session')->get('testToken');
        $articles = $this->getDoctrine()->getRepository('yomaahBundle:ArticleTest')->findByPage('accueil', $token);
        return $this->container->get('templating')->renderResponse('yomaahBundle:Main:projet.html.twig',
            array('articles' => $articles));
    }
}
