<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_transactions extends Model
{
    use HasFactory;

    protected $table = 'customer_transaction';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'order_date'
    ];
}
