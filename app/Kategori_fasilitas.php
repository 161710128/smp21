<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_fasilitas extends Model
{
    protected $table  = 'kategori_fasilitas';
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;

    public function Fasilitas(){
        return $this->HasMany('App\Fasilitas','id_kategorifasilitas');
    }
}
