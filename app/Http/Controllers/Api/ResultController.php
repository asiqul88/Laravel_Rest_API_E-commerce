<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Models\Item;
use App\Models\Category;
use App\Models\Sub_category;
use App\Models\Product;
use App\Models\File;

class ResultController extends Controller
{
    public function result(Item $result){

        return response()->json([

            'results' => [
                'id' => $result->id,
                'item_type' => $result->item_type,
                'location_id' => $result->location_id,
                'location' => Location::where('id',$result->location_id)->first(),
                'tradable' => $result->tradable,
                'user_id' => $result->user_id,
                'added_by' => User::where('id',$result->user_id)
                            ->select('id','first_name','last_name')
                            ->first(),
                'status' => $result->status,
                'is_active' => $result->is_active,
                'files' => [
                    'id' => $result->product->id,
                    'item_id' => $result->product->item_id,
                    'file' => File::where('product_id',$result->product->id)
                                    ->select('id','name','file','extention','size','description')
                                    ->get(),
                    'is_primary' => $result->product->is_primary,
                    ],
                'product' =>[
                    'id' => $result->product->id,
                    'item_id' => $result->product->item_id,
                    'title' => $result->product->title,
                    'category_id' => $result->product->category_id,
                    'category' => Category::where('id',$result->product->category_id)
                                            ->select('id','name','type','is_active')
                                            ->first(),
                    'sub_category_id' => $result->product->sub_category_id,
                    'sub_category' => Sub_category::where('parent_id',$result->product->category_id)
                                                    ->select('id','name','parent_id','is_active')
                                                    ->first(),

                    'negotiable' =>$result->product->negotiableid,
                    'price' =>$result->product->price,
                    'condition' =>$result->product->condition,
                    'description' =>$result->product->description,
                    'min_quantity' =>$result->product->min_quantity,
                    'validity' =>$result->product->validity,
                ]

            ]
        ]);

    }
}
