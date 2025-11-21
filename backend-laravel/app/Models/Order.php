<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_number',
        'user_id',
        'service_id',
        'duration_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'account_email',
        'account_password',
        'notes',
        'price',
        'status_order',
        'payment_status',
        'payment_method',
        'payment_reference',
        'payment_expired_at',
        'completed_at',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'payment_expired_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = 'ORD-' . date('Ymd') . '-' . strtoupper(Str::random(6));
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function duration()
    {
        return $this->belongsTo(ServiceDuration::class, 'duration_id');
    }
}
