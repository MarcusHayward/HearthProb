<?php

namespace Hearth\HearthProbBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProbabilityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'remaining',
                'number'
            )
            ->add(
                'size',
                'number'
            )
            ->add(
                'inMoves',
                'number'
            );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return "probability";
    }
}
 