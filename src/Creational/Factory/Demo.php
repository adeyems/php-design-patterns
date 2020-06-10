<?php

namespace Adeyems\DesignPattern\Creational\Factory;

require 'vendor/autoload.php';

class Demo
{
    public function __invoke()
    {

        $couponFactory = new CouponTypeFactory();

        $couponType = $couponFactory->getCouponType('monetary');
        echo $couponType->apply() . PHP_EOL;

        $couponType = $couponFactory->getCouponType('gift');
        echo $couponType->apply() . PHP_EOL;

        $couponType = $couponFactory->getCouponType('shipping');
        echo $couponType->apply() . PHP_EOL;
    }
}

(new Demo())();

