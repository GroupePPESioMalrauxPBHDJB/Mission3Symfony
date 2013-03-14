<?php

namespace Lam\MdlBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class formationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder,array $options) {
        $builder->add("nbInscrit",'number',array('label' => 'Nombre d\'inscrit : '));  
    }
    
    public function getName()
    { return 'lam_mdlbundle_formationtype';}

    
}
?>
