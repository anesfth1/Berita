<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama','slug'];
    public $timesstamps = true;

    public function artikel()
    {
        // Model kategori bisa memiliki banyak data
        // Dari model artikel melalui kategori_id
        return $this->hasMany('App\Artikel','kategori_id');
    }
}
