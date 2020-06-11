<?php
declare(strict_types=1);

namespace Adeyems\DesignPattern\Creational\Factory;

require 'vendor/autoload.php';

class FactoryDemo
{
    public function __invoke()
    {
        $couponHandlerFactory = new CouponHandlerFactory();

        $couponHandler = $couponHandlerFactory->getCouponHandler('monetary');
        echo $couponHandler->applyCoupon() . PHP_EOL; //applying monetary coupon ...

        $couponHandler = $couponHandlerFactory->getCouponHandler('gift');
        echo $couponHandler->applyCoupon() . PHP_EOL; //applying gift coupon

        $couponHandler = $couponHandlerFactory->getCouponHandler('shipping');
        echo $couponHandler->applyCoupon() . PHP_EOL; //applying shipping coupon
    }
}

(new FactoryDemo())();

