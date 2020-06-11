<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

interface CouponHandlerInterface {
    public function applyCoupon(): string;
}