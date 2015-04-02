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
                'number',
                ['max_length' => 2, 'attr' => ['class' => 'numberInput']]
            )
            ->add(
                ProbabilityType::DECK_SIZE,
                'number',
                ['max_length' => 2, 'attr' => ['class' => 'numberInput']]
            )
            ->add(
                ProbabilityType::IN_MOVES,
                'number',
                [
                    'max_length' => 2,
                    'attr' => ['class' => 'numberInput'],
                ]
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
 