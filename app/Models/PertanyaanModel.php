<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $items = DB::table('pertanyaans')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('pertanyaans')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id){
        $item = DB::table('pertanyaans')->where('id', $id)->first();
        return $item;
    }

    public static function update($data){
        $update_item = DB::table('pertanyaans')->where('id', $data['id'])->update($data);
        return $update_item;
    }

    public static function delete($id){
        $item = DB::table('pertanyaans')->where('id', $id)->delete();
        return 'delete';
    }
}






?>