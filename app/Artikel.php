<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $timestamps = true;

    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'artikel_tags', 'artikel_id', 'tag_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function rekomendasi()
    {
        return $this->belongsTo('App\Rekomendasi', 'artikel_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
