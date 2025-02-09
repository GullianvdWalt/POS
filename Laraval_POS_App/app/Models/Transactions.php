<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
                            'order_id',
                            'paid_amount',
                            'balance',
                            'payment_method',
                            'user_id',
                            'transaction_date',
                            'transaction_amount'
                        ];
}
