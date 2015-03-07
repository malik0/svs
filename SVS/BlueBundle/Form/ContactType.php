<?php

namespace SVS\BlueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('surname')
            ->add('email')
            ->add('telday','text', array('label' => 'Telephone (daytime)'))
            ->add('televen', 'text', array('label' => 'Telephone (evening)'))
            ->add('mobile')
            ->add('postcode')
            ->add('addressone','text', array('label' => 'Address line 1'))
            ->add('addresstwo', 'text', array('label' => 'Address line 2'))
            ->add('city')
            ->add('distance', 'choice', array('choices' => array('y' => 'Yes', 'n' => 'No'), 'label' => 'Are you willing to travel outside the local area'))
            ->add('travelnation', 'choice', array('choices' => array('y' => 'Yes', 'n' => 'No'), 'label' => 'Are you willing to travel nationally'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SVS\BlueBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'svs_bluebundle_contact';
    }
}
