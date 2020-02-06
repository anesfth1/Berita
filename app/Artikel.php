<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug','deskripsi','foto','user_id','kategori_id'
    ];
    public $timestamps = true;

    public function kategori()
    {
        // data Model 'Artikel' bisa dimiliki oleh Model 'kategori'
        // melalui 'kategori_id'
        return $this->belongsTo('App\User','kategori_id');
    }
    public function user()
    {
        // data Model 'Artikel' bisa dimiliki oleh Model 'user'
        // melalui 'kategori_id'
        return $this->belongsTo('App\User','user_id');
    }
    public function tag()
    {
        // Model 'artikel' memiliki relasi Many to Many(belongsMany)
        // Terhadap model 'Tag' yang berhubungan oleh table 'artikel_id'
        // masing2 sebagai 'tag_id' dan 'artikel_id'
        return $this->belongsToMany(
            'App\Tag',
            'artikel_tag',
            'artikel_id',
            'tag_id'
        );
    }
}
