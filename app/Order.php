<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'fio', 'phone', 'email', 'address',
        'comment', 'type_payment',
        'time_of_delivery', 'day_of_delivery'
    ];

    protected $attributes = [
      'type_payment' => 'online',
      'status' => 'processing'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static public function findAllByFilter(string $status = 'work') :?Collection
    {
        return self::where('status', $status)->get();
    }

    public function setStatus(string $status) :Order
    {
        $this->status = $status;
        $this->save();
        return $this;
    }

    public function getStatusAttribute($value) :string
    {
        $statuses = [
            'processing' => 'В Обработке',
            'work' => 'В работе',
            'completed' => 'Завершен',
            'canceled' => 'Отменен'
        ];
        foreach ($statuses as $key => $status) {
            if ($key == $value) return $status;
        }
    }

    public function getStatusColorAttribute()
    {
        $status = $this->getAttributeValue('status');
        $colors = [
            'В Обработке' => 'text-warning',
            'В работе' => 'text-primary',
            'Завершен' => 'text-success',
            'Отменен' => 'text-danger'
        ];
        foreach ($colors as $key => $color) {
            if ($key == $status) return $color;
        }
    }
}
