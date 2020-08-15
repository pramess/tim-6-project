<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //

	

    protected $table="pertanyaan";
     protected $fillable=["judul","isi","user_id","nama_user"];

     public function user() {
        return $this->belongsTo('App\User');
    }
}
