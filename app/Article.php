<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order_Details;

class Article extends Model
{
    public function order_details(){
        return $this->hasMany(Order_Details::class);
    }
}
