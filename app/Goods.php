<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'SAP', 'art',
        'name', 'brand', 'package',
        'manufacturer', 'description', 'ingredients', 'country',
        'category_name', 'category_id'
    ];

    public $timestamps = false;


    static public function add($information)
    {
        $goods = self::create([
            'art' => $information->MATNR,

            'name' => $information->ZEXARTNM,
            'description' => $information->ZEXARTDS,
            'brand' => $information->ZEXVENBR,
            'package' => $information->ZEXPACKG,

            'manufacturer' => $information->LIFNR,
            'ingredients' => $information->INGRIDIENTS,
            'country' => $information->WHERL,

            'category_name' => $information->WGBEZ
        ]);
    }

    static public function findBySAP($SAP) :?Goods
    {
        return self::where('SAP_code', $SAP)->first();
    }

    static public function findByArt($art) :?Goods
    {
        return self::where('art', $art)->first();
    }

    public function addCategory(int $category_id) :void
    {
        if ($this->category_id != $category_id) {
            $this->category_id = $category_id;
            $this->save();
        }
    }
}
