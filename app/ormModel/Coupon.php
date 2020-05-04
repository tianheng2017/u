<?php
/**
 *
 */

namespace app\ormModel;

use think\Model;

class Coupon extends Model
{
    protected $table = 'coupon';

    public function getCouponAttr($value){
        return floatval($value);
    }
}