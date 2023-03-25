<?php

namespace App\Models\IAMI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'iami_orders';
    protected $guarded = [];

    /**
     * Get all of the orderLists for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderLists()
    {
        return $this->hasMany(OrderList::class, 'order_id');
    }
    
    /**
     * Get all of the labels for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labels()
    {
        return $this->hasMany(Label::class, 'order_id');
    }
}
