<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['img','img_2','img_3'];
    protected $appends = ['img_path', 'img_path2','img_path3'];
    public function getImgPathAttribute()
    {
        return asset("storage/{$this->img}");
    }
    public function getImgPath2Attribute()
    {
        return asset("storage/{$this->img_2}");
    }
    public function getImgPath3Attribute()
    {
        return asset("storage/{$this->img_3}");
    }
}
