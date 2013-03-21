<?php

namespace Lam\MdlBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class inscriptionType extends AbstractType {
    
    public function buildForm(FormBuilder $builder,array $options) {
        $builder->add("nbInscrit",'number',array('label' => 'Nombre d\'inscrit : '))
                ->add("idOrganisation",'entity',array('label' => 'Nom de l\'organisation : ', 'class' => 'LamMdlBundle:Organisation', 'property'=>'nom' ));  
    }
    
    public function getName()
    { return 'lam_mdlbundle_inscriptiontype';}
    
}
?>
