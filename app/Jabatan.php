<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'Jabatans';
    protected $fillable = ['nama_jabatan'];
    public $timestamps = true;

    public function Guru(){
        return $this->HasMany('App\Guru','id_jabatan');
    }
    public function Staf(){
        return $this->HasMany('App\Staf','id_staf');
    }
}
