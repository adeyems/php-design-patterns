<?php
declare(strict_types=1);

namespace Adeyems\DesignPattern\Creational\Factory;

interface CouponHandlerInterface {
    public function applyCoupon(): string;
}