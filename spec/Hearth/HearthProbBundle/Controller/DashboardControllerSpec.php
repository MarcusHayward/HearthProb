<?php

namespace spec\Hearth\HearthProbBundle\Controller;

use Hearth\HearthProb\DashboardAssembler;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DashboardControllerSpec extends ObjectBehavior
{
    function let(DashboardAssembler $assembler)
    {
        $this->beConstructedWith($assembler);
    }

    function it_returns_the_assembled_message(DashboardAssembler $assembler)
    {
        $message = 'Hello Hearthers';
        $assembler->assemble()->willReturn($message);

        $this->indexAction()->shouldBe(["item" => $message]);
    }
}
