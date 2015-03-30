<?php

namespace Hearth\HearthProb;

class DrawCalculator
{
    public function calculate($remaining, $size, $inMoves)
    {
        $probability = 1.0;

        for ($a = 0; $a < $inMoves; $a++) {
            $probability *= ($size - $remaining- $a) / ($size - $a);
        }

        return round((1 - $probability) * 100, 2, PHP_ROUND_HALF_UP);
    }
}
