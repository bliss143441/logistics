<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function ordertostatuses(){
        return $this->hasMany(OrdersToStatus::class);
    }
}
