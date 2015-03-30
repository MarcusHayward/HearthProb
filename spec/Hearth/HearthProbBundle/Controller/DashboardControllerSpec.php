<?php

namespace spec\Hearth\HearthProbBundle\Controller;

use Hearth\HearthProb\DashboardAssembler;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;

class DashboardControllerSpec extends ObjectBehavior
{
    function let(DashboardAssembler $assembler)
    {
        $this->beConstructedWith($assembler);
    }

    function it_returns_the_assembled_message(
        DashboardAssembler $assembler,
        Request $request,
        FormInterface $form,
        FormView $formView
    ) {
        $assembler->assemble()->willReturn($form);
        $form->createView()->willReturn($formView);

        $this->indexAction($request)->shouldBe(["form" => $formView, "results" => -1]);
    }


    function it_returns_the_probability_if_post(
        DashboardAssembler $assembler,
        Request $request,
        FormInterface $form,
        FormView $formView
    ) {
        $request->isMethod('POST')->willReturn(true);

        $assembler->assemble()->willReturn($form);
        $form->createView()->willReturn($formView);

        $probability = 13.3;
        $assembler->handleAndFindProbability($request)->willReturn($probability);

        $this->indexAction($request)->shouldBe(["form" => $formView, "results" => $probability]);
    }
}
