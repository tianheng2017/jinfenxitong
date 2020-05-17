<?php
/**
 *
 */

namespace app\ormModel;

use think\Model;

class Itemlist extends Model
{
    protected $table = 'itemlist';

    public function getArateAttr($value){
        return floatval($value);
    }

    public function getPriceAttr($value){
        return floatval($value);
    }
}