<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_galeri extends Model
{
    
    protected $fillable = ['nama_galeri'];
    public $timestamps = true;

    public function Galeri(){
        return $this->HasMany('App\Galeri','id_kategorigaleri');
    }
}
