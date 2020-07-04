<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ItemModel{
    public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
    }
    public static function save($data){
        //menghapus data _token
        unset($data["_token"]);
        $new_item = DB::table('items')->insert($data);
        return $new_item;
    }
    public static function find_by_id($id){
        $item = DB::table('items')->where('id',$id)->first();
        return $item;
    }
}