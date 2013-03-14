<?php

namespace Lam\MdlBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Lam\MdlBundle\Entity\Organisation;


class organisationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder,array $options) {
        $builder->add("nomOrganisation",'text',array('label' => 'Nom de l\'organisation : '))  
                ->add("mail",'text',array('label' => 'Mail : '))
                ->add("nomResponsable",'text',array('label' => 'Nom du responsable : '))
                ->add("prenomResponsable",'text',array('label' => 'Prénom du responsable : '));
     }
    
    public function getName(){
        return 'lam_mdlbundle_organisationtype';
    }

    
}
?>
