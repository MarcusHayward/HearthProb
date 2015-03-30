<?php

namespace Hearth\HearthProb;

use Hearth\HearthProbBundle\Form\Type\ProbabilityType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class DashboardAssembler
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * @return FormInterface
     */
    public function assemble()
    {
        return $this->createForm();
    }

    /**
     * @param Request $request
     *
     * @return float
     */
    public function handleAndFindProbability(Request $request)
    {
        $form = $this->createForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                return (new DrawCalculator())->calculate(
                    $form->getData()[ProbabilityType::REMAINING],
                    $form->getData()[ProbabilityType::DECK_SIZE],
                    $form->getData()[ProbabilityType::IN_MOVES]
                );
            }
        }

        throw new \InvalidArgumentException("The form received was invalid");
    }

    /**
     * @return FormInterface
     */
    private function createForm()
    {
        return $this->formFactory->create(new ProbabilityType());
    }
}
