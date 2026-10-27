<?php

namespace App;

use InvalidArgumentException;

class Calculatrice
{
    /**
     * Additionne deux nombres.
     */
    public function additionner(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Divise deux nombres.
     * Throws InvalidArgumentException si division par zéro.
     */
    public function diviser(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new InvalidArgumentException("La division par zéro est impossible.");
        }

        return $a / $b;
    }
}
