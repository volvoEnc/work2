<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
      'code', 'art', 'SAP',
      'shop', 'price', 'vat'
    ];

    public $timestamps = false;


    static public function findByCode(string $code) : ?Price
    {
        return self::where('code', $code)->first();
    }

   static public function createPrice($data_price) :Price
    {
        return self::create([
            'code' => $data_price->EANNR,
            'art' => $data_price->MATNR,
            'shop' => $data_price->SHOP,
            'price' => $data_price->PRICE,
            'vat' => $data_price->VAT,
        ]);
    }

    public function updateInfo($new_data) :Price
    {
        $this->update([
            'price' => $new_data->PRICE,
            'vat' => $new_data->VAT
        ]);
        $this->save();
        return $this;
    }
}
