<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
                            'order_id',
                            'product_id',
                            'quantity',
                            'price',
                            'amount',
                            'discount'
                        ];
}
