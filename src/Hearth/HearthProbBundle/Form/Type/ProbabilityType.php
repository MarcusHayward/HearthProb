<?php

namespace Hearth\HearthProbBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProbabilityType extends AbstractType
{
    CONST REMAINING = 'remaining';
    CONST DECK_SIZE = 'deckSize';
    CONST IN_MOVES = 'inMoves';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                ProbabilityType::REMAINING,
                'number'
            )
            ->add(
                ProbabilityType::DECK_SIZE,
                'number'
            )
            ->add(
                ProbabilityType::IN_MOVES,
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
 