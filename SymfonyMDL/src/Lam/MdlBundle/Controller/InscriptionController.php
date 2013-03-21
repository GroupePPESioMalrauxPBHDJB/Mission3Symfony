<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\inscriptionType;
use Lam\MdlBundle\Entity\Inscription;
 
class InscriptionController extends Controller
{
    
    public function InscriptionInfoIndexAction($idFormation)
    {
        $lInscription= new Inscription;
        $laForm=$this->createForm(new inscriptionType(),$lInscription);
        return $this->render('LamMdlBundle:Default:inscriptionInfo.html.twig',array('form'=>$laForm->createView()));
    }
    public function InscriptionSportIndexAction($idFormation)
    {
        $lInscription= new Inscription;
        $laForm=$this->createForm(new inscriptionType(),$lInscription);
        return $this->render('LamMdlBundle:Default:inscriptionSport.html.twig',array('form'=>$laForm->createView()));
    }
}