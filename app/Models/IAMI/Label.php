<?php

namespace App\Models\IAMI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $table = 'iami_labels';
    protected $guarded = [];

    /**
     * Get the order that owns the Label
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /**
     * Get the orderlist that owns the Label
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderlist()
    {
        return $this->belongsTo(OrderList::class, 'order_list_id');
    }
}
