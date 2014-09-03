<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\PricingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Volume based pricing configuration form type.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class VolumeBasedConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class'    => null,
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,
                'label'         => 'sylius.pricing.volume_based.label',
                'type'          => 'sylius_price_calculator_volume_based_configuration'
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_price_calculator_volume_based';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'collection';
    }
}