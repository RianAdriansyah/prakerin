<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsTo('App\Artikel', 'artikel_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
