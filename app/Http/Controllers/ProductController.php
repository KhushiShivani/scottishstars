<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Models\Sizes;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cat,$sub_cat,$prd,$id)
    {
        $product = Product::where('id',$id)->with(['product_size'])->first();
        // $related_products = Product::where('sub_cat_id',$product['sub_cat_id'])->limit(10)->get(['single_img','price','old_price','title']);
        $related_products = Product::where('sub_cat_id',$product['sub_cat_id'])->with(['category','sub_category'])->limit(10)->get();

        return view('product_details',compact('product','related_products','stock','metaTitle','metaDescription'));
    }

    public function reviewStore(Request $request)
    {
        $store_review = Review::create([
            'product_id' => $request->product_id,
            'order_id' => $request->order_id,
            'full_name' => null,
            'message' => $request->message,
            'rating' => round($request->rating),
            'visible' => 0
        ]);

         // MAIL INFO INTEGRATION
         $basic_array[0] = array(
            'for' => 'user',
            'from' => '2',
            'subject' => 'Review Submitted Successfully',
            'template' => 'mail_templates/product_review',
            // 'order_id' => $order_id
        );
        $basic_array[1] = array(
            'for' => 'admin',
            'from' => '2',
            'subject' => 'New Review Received',
            'template' => 'mail_templates/product_review',
            // 'order_id' => $order_id
        );

        foreach($basic_array as $data){
            if($data['for'] == 'user'){
                \Mail::to(auth()->user()->email)->send(new SendMail($data));
            }
            else{
                \Mail::to('linenhousestores@gmail.com')->send(new SendMail($data));
            }
        }

        $request->session()->flash('alert-success','your review is saved successfully');
        return back();
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
        //
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
    public function destroy($id)
    {
        //
    }
}
