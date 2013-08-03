<?php

namespace CollDev\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShipmentMethodsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('virtuemartVendorId')
            ->add('shipmentJpluginId')
            ->add('slug')
            ->add('shipmentElement')
            ->add('shipmentParams')
            ->add('ordering')
            ->add('shared')
            ->add('published')
            ->add('createdOn')
            ->add('createdBy')
            ->add('modifiedOn')
            ->add('modifiedBy')
            ->add('lockedOn')
            ->add('lockedBy')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CollDev\MainBundle\Entity\ShipmentMethods'
        ));
    }

    public function getName()
    {
        return 'colldev_mainbundle_shipmentmethodstype';
    }
}
