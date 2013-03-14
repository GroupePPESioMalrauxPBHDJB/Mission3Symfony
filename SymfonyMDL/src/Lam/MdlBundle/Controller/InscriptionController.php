<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class InscriptionController extends Controller
{
    
    public function InscriptionInfoIndexAction()
    {
        return $this->render('LamMdlBundle:Default:inscriptionForm.html.twig');
    }
    public function InscriptionSportIndexAction()
    {
        
        return $this->render('LamMdlBundle:Default:inscriptionForm.html.twig');
    }
}