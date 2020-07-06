<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all(){
        $items = DB::table('jawabans')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('jawabans')->insert($data);
        return $new_item;
    }

    public static function find_by_pertanyaan_id($id_pertanyaan){
        //$item = DB::table('jawabans')->where('pertanyaan_id', $id_pertanyaan)->first(); // klo pake first ga bisa pake foreach di jawaban.blade
        //return $item;
        $items = DB::table('jawabans')->where('pertanyaan_id', $id_pertanyaan)->get();
        return $items;
    }
}