<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\OrderStatus;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'total',
        'address',
        'phone',
    ];

    //  return the Cart items ->> Eager Loading
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    //  retrn a full list of an order statuses ->> Eager Loading
    public function statuses()
    {
        return $this->hasMany(OrderStatus::class);
    }
    //  return the latest status of an order
    public function latestStatus()
    {
        return $this->hasOne(OrderStatus::class)->latestOfMany();
    }
}
