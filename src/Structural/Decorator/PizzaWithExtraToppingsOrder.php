<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

class PizzaWithExtraToppingsOrder extends OrderDecorator
{
    const EXTRA_TOPPINGS_PRICE = 20.;

    public function getPrice(): float
    {
        return $this->order->getPrice() + self::EXTRA_TOPPINGS_PRICE;
    }

    public function getShippingFee(): float
    {
        return $this->order->getShippingFee();
    }
}
