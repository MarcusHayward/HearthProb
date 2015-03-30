<?php

namespace spec\Hearth\HearthProb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DashboardAssemblerSpec extends ObjectBehavior
{
    function it_returns_a_message()
    {
        $this->assemble()->shouldBe('Hello Hearthers');
    }
}
