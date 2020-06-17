<?php

namespace DesignPatterns\Structural\Decorator;

class PizzaOrder implements Order
{
    public function getPrice(): float
    {
        return 100.;
    }

    public function getShippingFee(): float
    {
        return 50.;
    }
}
