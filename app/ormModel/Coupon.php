<?php
/**
 *
 */

namespace app\ormModel;

use think\Model;

class Coupon extends Model
{
    protected $table = 'coupon';
    protected $autoWriteTimestamp = 'datetime';
}