<?php

namespace Adeyems\DesignPattern\Creational\Factory;

class MonetaryCoupon implements CouponType {

    public function apply(): string {
        return 'applying monetary coupon ...';
    }

}