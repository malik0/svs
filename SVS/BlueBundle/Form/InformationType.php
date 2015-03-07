<?php

namespace SVS\BlueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InformationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('workeligible', 'text', array('label' => 'Are you eligible to work in the uk?'))
            ->add('visatype', 'text', array('label' => 'What is your visa status'))
            ->add('visaexpiry', 'text', array('label' => 'When does your visa expire'))
            ->add('drivinglicence', 'text', array('label' => 'do you have a full uk driving licence'))
            ->add('regularcar', 'text', array('label' => 'Do you have a regular use of a car?'))
            ->add('transportothers', 'text', array('label' => 'Are you willing to transport others?'))
            ->add('haveconviction', 'text', array('label' => 'Have you had previous convictions?'))
            ->add('convictiondetails', 'text', array('label' => 'Please state the details of any convictions which you have had'))
            ->add('interviewaccomadation','text', array('label' => 'would you require any accomodation for the interview'))
            ->add('interviewdetails','text', array('label' => 'please state what those accomodations would be'))
            ->add('havesia', 'text', array('label' => 'do you have an SIA licence?'))
            ->add('sialicenceno', 'text', array('label' => 'Please type the SIA licence number'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SVS\BlueBundle\Entity\Information'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'svs_bluebundle_information';
    }
}
