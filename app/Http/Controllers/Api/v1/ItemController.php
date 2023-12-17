<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ItemResource;
use App\Http\Resources\v1\ItemCollection;


class ItemController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return new ItemCollection(Item::paginate());
    }

    public function store(Request $request){
        $item = Item::create($request->all());
    }

    public function show(Item $item){
        return new ItemResource($item);
    }
}


