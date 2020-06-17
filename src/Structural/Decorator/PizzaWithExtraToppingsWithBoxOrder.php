<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

class PizzaWithExtraToppingsWithBoxOrder extends OrderDecorator
{
    const EXTRA_BOX_PRICE = 60.;

    public function getPrice(): float
    {
        return $this->order->getPrice() + self::EXTRA_BOX_PRICE;
    }

    public function getShippingFee(): float
    {
        return $this->order->getShippingFee() + $this->box_shipping_price();
    }

    private function box_shipping_price(): float
    {
        return 10.5;
    }
}
