<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GroupCategory extends Model
{
    protected $fillable = [
      'name', 'image'
    ];

    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Category::class, 'group_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_id', 'id');
    }

    public function add_image(Request $request)
    {
        $path = $request->file('image')->store('group_categories', 'public');
        $path = '/storage/' . $path;
        $this->image = $path;
        $this->save();
        return $this;
    }
}
