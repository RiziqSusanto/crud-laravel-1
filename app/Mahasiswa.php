<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nis';
    protected $keyType = 'string';
    protected $table = 'mahasiswa';
    protected $fillable = ['nis', 'nama', 'email', 'id_jurusan'];
    public $timestamps = false;
    public function jurusan()
        {
            return $this->belongsTo('App\Jurusan', 'id_jurusan', 'id');
        }
}
