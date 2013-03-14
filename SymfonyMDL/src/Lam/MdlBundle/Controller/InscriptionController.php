<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//test 
class InscriptionController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LamMdlBundle:Default:inscriptionForm.html.twig');
    }
}