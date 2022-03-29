<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->with('sub_category')->get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub_categories = SubCategory::where('status',1)->get();
        return view('admin.product.create',compact('sub_categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $get_cat = SubCategory::where('id',$request->sub_cat_id)->with('category')->first();
        // SINGLE PRODUCT IMAGE
        $single_img = null;
        if($request->hasFile('single_img')){
            $image = $request->file('single_img');
            $name = preg_replace("/[^a-z0-9\._]+/", "-", strtolower(time() . rand(1, 9999) . '.' . $image->getClientOriginalName()));
            if($image->move(public_path().'/uploads/product', str_replace(" ", "", $name))){
                $single_img = '/uploads/product/'.$name;
            }
        }

        // PRODUCT IMAGE GALLERY
        $gallery = $request->file('gallery');
        if ($request->hasFile('gallery')) :
                foreach ($gallery as $item):
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(public_path() . '/uploads/product/', $imageName);
                    $arr[] = '/uploads/product/' . $imageName;
                endforeach;
                $gallery = implode(",", $arr);
        else:
                $gallery = '';
        endif;
        $create_product = Product::create([
            'cat_id' => $get_cat->category['id'],
            'sub_cat_id' => $request->sub_cat_id,
            'title' => $request->title,
            'single_img' => $single_img,
            'gallery' => $gallery,
            'status' => $request->status, // 1 = Active 2 = In-Active

        ]);

        $request->session()->flash('alert-success', 'Product Created successfully');
        return redirect('admin/product/index');
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
    public function edit(Request $request)
    {
        $old_data = Product::where('id',$request->id)->with('category')->with('sub_category')->first();
        $sub_categories = SubCategory::where('status',1)->get();
        return view('admin.product.update',compact('old_data','sub_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $get_cat = SubCategory::where('id',$request->sub_cat_id)->with('category')->first();
        // SINGLE PRODUCT IMAGE
        $single_img = null;
        if(empty($request->single_img)){
            $single_img = $request->old_single_img; //proceed with old data
        }
        else{
            if($request->hasFile('single_img')){
                //deleting old image from folder
                $image_path = public_path($request->old_single_img);  // prev image path
                if(@unlink($image_path)){
                    unlink($image_path);
                }

                $image = $request->file('single_img');
                $name = preg_replace("/[^a-z0-9\._]+/", "-", strtolower(time() . rand(1, 9999) . '.' . $image->getClientOriginalName()));
                if($image->move(public_path().'/uploads/product', str_replace(" ", "", $name))){
                    $single_img = '/uploads/product/'.$name;
                }
            }
        }

        // PRODUCT IMAGE GALLERY
        if(empty($request->gallery)){
            $gallery = $request->old_gallery; //proceed with old data
        }
        else{
            $gallery = $request->file('gallery');
            if ($request->hasFile('gallery')) :
                    foreach ($gallery as $item):
                        $var = date_create();
                        $time = date_format($var, 'YmdHis');
                        $imageName = $time . '-' . $item->getClientOriginalName();
                        $item->move(public_path() . '/uploads/product/', $imageName);
                        $arr[] = '/uploads/product/' . $imageName;
                    endforeach;
                    $gallery = implode(",", $arr);
            else:
                    $gallery = '';
            endif;
        }

        $create_product = Product::where('id',$request->product_id)->update([
            'cat_id' => $get_cat->category['id'],
            'sub_cat_id' => $request->sub_cat_id,
            'title' => $request->title,
            'single_img' => $single_img,
            'gallery' => $gallery,
            'status' => $request->status, // 1 = Active 2 = In-Active

        ]);

        $request->session()->flash('alert-success', 'Product Updated successfully');
        return redirect('admin/product/index');
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
