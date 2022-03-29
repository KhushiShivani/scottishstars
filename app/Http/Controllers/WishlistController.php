<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlist = Wishlist::where('user_id',auth()->user()->id)->with(['product','product_sizes'])->get();
        // dd($wishlist);
        return view('wishlist',compact('wishlist'));
    }

    public function count(Request $request)
    {
        $wishlist_count = Wishlist::where('user_id',auth()->user()->id)->count();
        $wish_list = Wishlist::where('user_id',auth()->user()->id)->with('product')->get();
        $data['wishlist_count'] = $wishlist_count;
        $data['wish_list'] = $wish_list;
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // CHECKING WISHLIST
        $store_wishlist = Wishlist::create(['product_id'=>$request->id,'user_id'=>auth()->user()->id]);
        $request->session()->flash("alert-success","Wishlist added successfully");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $store_wishlist = Wishlist::where(['product_id'=>$request->id,'user_id'=>auth()->user()->id])->delete();
        $request->session()->flash("alert-danger","Item removed from Wishlist successfully");
        return back();
    }
}
