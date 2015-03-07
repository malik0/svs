<?php

namespace SVS\BlueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GoldType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            
        ;
		$builder->add('topresent', 'checkbox', array(
		    'label'     => 'are you still at this job?',
		    'required'  => false,
		));
		$builder->add('startdate', 'date', array(
    'input'  => 'datetime',
    
    'years' => range(2001,2014)
));
$builder->add('enddate', 'date', array(
    'input'  => 'datetime',
    
    'years' => range(2001,2014)
));
$builder->add('afterdate', 'date', array(
    'input'  => 'datetime',
    'attr'=>array('style'=>'display:none;'),
    'years' => range(2001,2014)
));

 



    }
	
	
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SVS\BlueBundle\Entity\Gold'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'svs_bluebundle_gold';
    }
}
