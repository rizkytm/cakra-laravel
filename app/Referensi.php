<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referensi extends Model
{
    protected $fillable = ['user_id', 'judul', 'sumber', 'penulis', 'materi'];

    public function unsur_instrinsik()
    {
        return $this->hasMany(UnsurInstrinsik::class);
    }
}
