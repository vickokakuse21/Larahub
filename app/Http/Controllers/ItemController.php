<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    //
    public function index(){
        $items = ItemModel::get_all();
        return view('item.index',compact('items'));
    }

    public function create(){
        return view('item.form');
    }
    public function store(Request $request){
        $new_item = ItemModel::save($request->all());
        return redirect('/items');
    }
    public function show($id){
        $item = ItemModel::find_by_id($id);
        return view('item.show',compact('item'));
    }
}
