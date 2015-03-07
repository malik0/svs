<?php

namespace SVS\BlueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class availablityType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coneName', 'text', array('label' => 'emergence contact one name'))
            ->add('coneTelephone', 'text', array('label' => 'emergence contact one telephone number'))
            ->add('coneAddress', 'text', array('label' => 'emergence contact one address'))
            ->add('conePostcode', 'text', array('label' => 'emergence contact one postcode'))
            ->add('coneRelationship', 'text', array('label' => 'emergence contact one relationship'))
            ->add('ctwoName', 'text', array('label' => 'emergence contact two name'))
            ->add('ctwoTelephone', 'text', array('label' => 'emergence contact two telephone number'))
            ->add('ctwoAddress', 'text', array('label' => 'emergence contact two address'))
            ->add('ctwoPostcode', 'text', array('label' => 'emergence contact two postcode'))
            ->add('ctwoRelationship', 'text', array('label' => 'emergence contact two relationship'))
            ->add('daymon', 'checkbox', array(
    'label'     => 'available monday daytime',
    'required'  => false,
))
            ->add('daytues', 'checkbox', array(
    'label'     => 'available tuesday daytime',
    'required'  => false,
))
            ->add('daywed', 'checkbox', array(
    'label'     => 'available wednesday daytime',
    'required'  => false,
))
            ->add('daythurs', 'checkbox', array(
    'label'     => 'available thursday daytime',
    'required'  => false,
))
            ->add('dayfri', 'checkbox', array(
    'label'     => 'available friday daytime',
    'required'  => false,
))
            ->add('daysat', 'checkbox', array(
    'label'     => 'available saturday daytime',
    'required'  => false,
))
            ->add('daysun', 'checkbox', array(
    'label'     => 'available sunday daytime',
    'required'  => false,
))
            ->add('daybank', 'checkbox', array(
    'label'     => 'available bank holiday daytime',
    'required'  => false,
))
            ->add('daysummer', 'checkbox', array(
    'label'     => 'available summer daytime',
    'required'  => false,
))
            ->add('evenmon', 'checkbox', array(
    'label'     => 'available monday evening',
    'required'  => false,
))
            ->add('eventues', 'checkbox', array(
    'label'     => 'available tuesday evening',
    'required'  => false,
))
            ->add('evenwed', 'checkbox', array(
    'label'     => 'available wednesday evening',
    'required'  => false,
))
            ->add('eventhurs', 'checkbox', array(
    'label'     => 'available thursday evening',
    'required'  => false,
))
            ->add('evenfri', 'checkbox', array(
    'label'     => 'available friday evening',
    'required'  => false,
))
            ->add('evenbank', 'checkbox', array(
    'label'     => 'available bank holiday evening',
    'required'  => false,
))
            ->add('evensummer', 'checkbox', array(
    'label'     => 'available summer evening',
    'required'  => false,
))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SVS\BlueBundle\Entity\availablity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'svs_bluebundle_availablity';
    }
}
