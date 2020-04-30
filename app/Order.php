<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use App\Order_details;

class Order extends Model
{
    public function Customers(){
        return $this->hasOne(Customer::class);
    }

    public function Order_details(){
        return $this->hasOne(Order_details::class);
    }
}
