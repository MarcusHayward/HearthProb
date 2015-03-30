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
//        return $this->createForm();
        return  $this->formFactory->create(new ProbabilityType());
    }

//    public function handleAndFindProbability(Request $request)
//    {
//        $form = $this->createForm();
//
//        if ($request->isMethod('POST')) {
//            $form->bind($request);
//            if ($form->isValid()) {
//                echo $form->getData();
//            }
//        }
//
//        return 10;
//    }

    /**
     * @return FormInterface
     */
    private function createForm()
    {
        return $this->formFactory->create(new ProbabilityType());
    }
}
