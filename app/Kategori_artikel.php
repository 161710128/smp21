<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_artikel extends Model
{
    protected $table  = 'kategori_artikels';
    protected $fillable = ['nama_artikel'];
    public $timestamps = true;

    public function Artikel(){
        return $this->HasMany('App\Artikel','id_kategoriartikel');
    }
}
