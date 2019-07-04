<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama','sekolah','kelas','alamat','guru'
    ];
    public $timestamps = true;
}
