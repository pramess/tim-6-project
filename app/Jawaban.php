<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    //
     protected $table="jawaban";
     protected $fillable=["isi"];

      public function answer(){
      	return $this->belongsTo('App/Pertanyaan','pertanyaan_id');
      }
}
