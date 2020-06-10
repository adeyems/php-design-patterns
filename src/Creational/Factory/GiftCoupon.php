<?php

namespace Adeyems\DesignPattern\Creational\Factory;

class GiftCoupon implements CouponType {

    public function apply(): string {
        return 'applying gift coupon ...';
    }

}