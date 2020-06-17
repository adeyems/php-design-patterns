<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Decorator\PizzaOrder;
use DesignPatterns\Structural\Decorator\PizzaWithExtraToppingsWithBoxOrder;
use DesignPatterns\Structural\Decorator\PizzaWithExtraToppingsOrder;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPatternTest.
 */
class StructuralPatternTest extends TestCase
{
    public function test_it_can_return_pizza_order_price_and_shipping_fee()
    {
        $order = new PizzaOrder();
        $this->assertSame(100., $order->getPrice());
        $this->assertSame(50., $order->getShippingFee());
    }

    public function test_it_can_return_pizza_with_extra_toppings_order_price_and_shipping_fee()
    {
        $order = new PizzaWithExtraToppingsOrder(new PizzaOrder());
        $this->assertSame(120., $order->getPrice());
        $this->assertSame(50., $order->getShippingFee());
    }

    public function test_it_can_return_pizza_with_extra_toppings_with_box_order_price_and_shipping_fee()
    {
        $order = new PizzaWithExtraToppingsWithBoxOrder(new PizzaWithExtraToppingsOrder(new PizzaOrder()));
        $this->assertSame(180., $order->getPrice());
        $this->assertSame(60.5, $order->getShippingFee());
    }
}
