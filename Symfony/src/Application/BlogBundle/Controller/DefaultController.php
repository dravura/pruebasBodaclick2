<?php

namespace Application\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
