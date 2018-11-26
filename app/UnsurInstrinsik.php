<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnsurInstrinsik extends Model
{
    protected $fillable = ['referensi_id', 'user_id', 'tema', 'tokoh', 'alur', 'latar', 'amanat'];

    public function referensi()
    {
    	return $this->belongsTo(Referensi::class);
    }
}
