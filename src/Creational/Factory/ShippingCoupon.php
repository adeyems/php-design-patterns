<?php

namespace Adeyems\DesignPattern\Creational\Factory;

class ShippingCoupon implements CouponType {

    public function apply(): string {
        return 'applying shipping coupon ...';
    }

}