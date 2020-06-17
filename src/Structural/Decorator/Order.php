<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

interface Order
{
    public function getPrice(): float;

    public function getShippingFee(): float;
}
