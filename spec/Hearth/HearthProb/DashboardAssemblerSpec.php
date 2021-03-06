<?php

namespace spec\Hearth\HearthProb;

use Hearth\HearthProbBundle\Form\Type\ProbabilityType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;

class DashboardAssemblerSpec extends ObjectBehavior
{
    function let(FormFactoryInterface $formFactory)
    {
        $this->beConstructedWith($formFactory);
    }

    function it_returns_the_probability_form(FormFactoryInterface $formFactory, FormInterface $form)
    {
        $formFactory->create(new ProbabilityType())->willReturn($form);
        $this->assemble()->shouldBe($form);
    }
}
