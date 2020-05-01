<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Article;

class Order_details extends Model
{
    public function orders(){
        return $this->hasMany("App\Order", "orders_id", "id");
    }

    public function articles(){
        return $this->hasMany("App\Article", "article_id", "id");
    }
}
