<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
