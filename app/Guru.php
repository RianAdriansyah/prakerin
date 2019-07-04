<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nama','nip','mapel','alamat','umur'
    ];
    public $timestamps = true;
}
