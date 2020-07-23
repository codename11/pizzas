<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order_Details;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'thumbnail', 'type', 'price'
    ];

    public function order_details(){
        return $this->hasMany(Order_Details::class);
    }
}
