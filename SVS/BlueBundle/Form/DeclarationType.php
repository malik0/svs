<?php

namespace SVS\BlueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeclarationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('further', 'text', array('label' => 'please provide any further information you believe will help your application, include other skills'))
            ->add('worktime', 'checkbox', array(
    'label'     => 'agree to opt out of worktime directive',
    'required'  => false,
))
            ->add('mainduties','text', array('label' => 'what do you believe to be the main duties of the work'))
            ->add('onlinesig', 'checkbox', array(
    'label'     => 'I hereby certifiy that i have filled in this application form myself and that the information given is both true and current, Please tick the box if you agree',
    'required'  => false,
) )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SVS\BlueBundle\Entity\Declaration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'svs_bluebundle_declaration';
    }
}
