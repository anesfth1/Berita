<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel()
    {
        // Model Tag memiliki relasi Many to Many(belongsMany)
        // Terhadap model 'Artikel' yang berhubungan oleh table 'artikel_tag'
        return $this->belongsToMany(
            'App\Artikel',
            'artikel_tag',
            'tag_id',
            'artikel_id'
        );
    }
}
