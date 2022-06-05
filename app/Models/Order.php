<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'address', 'status', 'courier_name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');;
    }


}
