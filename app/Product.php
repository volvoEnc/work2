<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'art', 'SAP',
        'price', 'amount', 'shop'
    ];

    public $timestamps = false;


    static public function createEmpty(string $code, int $art, int $shop_id) : Product
    {
        return self::create([
            'code' => $code,
            'art' => $art,
            'shop' => $shop_id
        ]);
    }


    public function setPrice(float $price) : Product
    {
        $this->price = $price;
        $this->save();
        return $this;
    }

    public function setAmount(float $amount) : Product
    {
        $this->amount = $amount;
        $this->save();
        return $this;
    }

    public function setAssort(int $assort) : Product
    {
        $this->assort = $assort;
        $this->save();
        return $this;
    }


    static public function getGoods(int $art) : ?Goods
    {
        return self::where('art', $art)->first();
    }

    static public function findByCode(string $code) :?Product
    {
        return self::where('code', $code)->first();
    }
}
