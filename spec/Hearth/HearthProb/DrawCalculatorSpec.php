<?php

namespace spec\Hearth\HearthProb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DrawCalculatorSpec extends ObjectBehavior
{
    function it_calculates_the_probability_initially()
    {
        $remaining = 1;
        $size = 30;
        $inMoves = 4;
        $this->calculate($remaining, $size, $inMoves)->shouldBe(13.33);
    }

    function it_calculates_the_probability_initially_when_two()
    {
        $remaining = 2;
        $size = 30;
        $inMoves = 4;
        $this->calculate($remaining, $size, $inMoves)->shouldBe(25.29);
    }

    function it_calculates_the_probability_initially_when_second()
    {
        $remaining = 2;
        $size = 30;
        $inMoves = 5;
//        $this->calculate($remaining, $size, $inMoves)->shouldBe(36.6);
    }
}
