<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function moreDetails(Request $request)
   {
    $data = Product::where(['id'=>$request->id])->with(['sub_category','category'])->first();
    return view('view-more',compact('data'));
   }

   public function searchItems(Request $request){
        $search_result = array();
        $search_key = (isset($request->search_key))?$request->search_key:'';
        $search_result = Product::where('title','like',"%{$search_key}%")->with(['sub_category','category'])->get();
        return view('search_results',compact('search_result','search_key'));
   }
}
