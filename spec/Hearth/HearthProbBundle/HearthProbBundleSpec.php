<?php

namespace spec\Hearth\HearthProbBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HearthProbBundleSpec extends ObjectBehavior
{
    function it_should_be_a_bundle()
    {
        $this->shouldBeAnInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle');
    }
}
