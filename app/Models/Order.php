<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'address', 'status', 'courier_name', 'product_id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }


}
