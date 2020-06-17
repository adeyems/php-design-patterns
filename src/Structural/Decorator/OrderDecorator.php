<?php

namespace DesignPatterns\Structural\Decorator;

abstract class OrderDecorator implements Order
{
    public Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
