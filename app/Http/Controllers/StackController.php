<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;
use App\Jawaban;

class StackController extends Controller
{
    //
    public function add(){
    	return view('items/addquestion');
    }


    public function save(Request $request){
    //dd($request->all());
    $request->validate([
      'judul'=>'required|unique:pertanyaan', //required:tidak boleh kosong, unique: tidak boleh sama
      'isi'=>'required|unique:pertanyaan'
    ]);

     $pertanyaan=pertanyaan::create([
      "judul"=>$request["judul"],
      "isi"=>$request["isi"]

    ]);
      return redirect('/pertanyaan')->with('success','Berhasil Disimpan!');
   

  
   }
   public function content(){
 
    $pertanyaan=pertanyaan::all();
    return view('items.content',compact('pertanyaan')); //compact:mengirim menggunakan compact sehingga bisa diperlakukan sebagai array
   }

   
    
}
