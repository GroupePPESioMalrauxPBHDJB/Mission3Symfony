<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\inscriptionType;
use Lam\MdlBundle\Entity\Inscription;
 
class InscriptionController extends Controller
{
    
    public function InscriptionInfoIndexAction($idFormation)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $laFormation=$em->getRepository('LamMdlBundle:formation')->find($idFormation); 
        $laFormationInfo=$laFormation->getLaformationinformatique();
        $dateStage=$laFormation->getDate();
        $horaireStage=$laFormation->getHoraire();
        $TitreFormation=$laFormationInfo->getTitre();
        $nbPlace=$laFormationInfo->getNbplace();
        $nbTotalInscrit=$laFormation->getNbinscrit();
        $lInscription= new Inscription;
        $lInscription->setIdFormation($laFormation);
        $laForm=$this->createForm(new inscriptionType(),$lInscription);
        $mess="";
        $request= $this->getRequest();
        //$url=$request->headers->get('referer');
        if ($request->getMethod()=='POST'){
                $laForm->bindRequest($request);
                if ($laForm->isValid()){
                    $em=$this->getDoctrine()->getEntityManager();
                    $em->persist($lInscription);
                    $lInscription->getIdFormation()->setNbinscrit(($lInscription->getIdFormation()->getNbinscrit()+$lInscription->getNbinscrit()));
                    $em->flush();
                    $mess='L\'inscription est effectuée.'; 
                    return $this->render('LamMdlBundle:Formulaire:inscriptionInfo.html.twig',array('TitreFormation'=>$TitreFormation,'dateStage'=>$dateStage,'horaireStage'=>$horaireStage,'mess'=>$mess));
        }
                        }
        return $this->render('LamMdlBundle:Formulaire:inscriptionInfo.html.twig',array('form'=>$laForm->createView(),'TitreFormation'=>$TitreFormation,'dateStage'=>$dateStage,'horaireStage'=>$horaireStage,'nbPlace'=>$nbPlace, 'nbTotalInscrit'=>$nbTotalInscrit, 'idFormation'=>$idFormation,  'mess'=>$mess));
    }
    public function InscriptionSportIndexAction($idFormation)
    {
        
        $em = $this->getDoctrine()->getEntityManager();
        $laFormation=$em->getRepository('LamMdlBundle:formation')->find($idFormation);
        $laFormationSport=$laFormation->getLaformationsport();
        $dateStage=$laFormation->getDate();
        $horaireStage=$laFormation->getHoraire();
        $TitreFormation=$laFormationSport->getTitre();
        $nbPlace=$laFormationSport->getNbplace();
        $nbTotalInscrit=$laFormation->getNbinscrit();
        $lInscription= new Inscription;
        $lInscription->setIdFormation($laFormation);
        $laForm=$this->createForm(new inscriptionType(),$lInscription);
        $mess="";
        $request= $this->getRequest();
        if ($request->getMethod()=='POST'){
                $laForm->bindRequest($request);
                if ($laForm->isValid()){
                    $em=$this->getDoctrine()->getEntityManager();
                    $em->persist($lInscription);
                    $lInscription->getIdFormation()->setNbinscrit(($lInscription->getIdFormation()->getNbinscrit()+$lInscription->getNbinscrit()));
                    $em->flush();
                    $mess='L\'inscription est effectuée.';
                    return $this->render('LamMdlBundle:Formulaire:inscriptionSport.html.twig',array('TitreFormation'=>$TitreFormation,'dateStage'=>$dateStage,'horaireStage'=>$horaireStage, 'mess'=>$mess));
        }
        }
        return $this->render('LamMdlBundle:Formulaire:inscriptionSport.html.twig',array('form'=>$laForm->createView(),'TitreFormation'=>$TitreFormation,'dateStage'=>$dateStage,'horaireStage'=>$horaireStage,'nbPlace'=>$nbPlace, 'nbTotalInscrit'=>$nbTotalInscrit, 'idFormation'=>$idFormation, 'mess'=>$mess));
    }
}