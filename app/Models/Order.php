<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'address',
        'address2',
        'country',
        'state',
        'zip',
        'payment_id',
        'user_id',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
