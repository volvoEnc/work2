<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    protected $fillable = [
        'name', 'value'
    ];

    static public function setInfo(array $attributes = []) :void
    {
        foreach ($attributes as $key => $attribute) {
            $info = self::where('name', $key)->first();
            if (!$info) {
                $info = self::create([
                    'name' => $key,
                    'value' => $attribute
                ]);
            }
            else {
                $info->update([
                    'name' => $key,
                    'value' => $attribute
                ]);
            }
        }
    }
}
