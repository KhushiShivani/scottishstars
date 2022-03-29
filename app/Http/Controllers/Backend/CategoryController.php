<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('updated_at','DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|min:3',
            'sort_order' => 'nullable|integer',
        ]);
        $img_url = null;
        if($request->hasFile('img_url')){
            $image = $request->file('img_url');
            $name = preg_replace("/[^a-z0-9\._]+/", "-", strtolower(time() . rand(1, 9999) . '.' . $image->getClientOriginalName()));
            if($image->move(public_path().'/uploads/category', str_replace(" ", "", $name))){
                $img_url = '/uploads/category/'.$name;
            }
        }
        $create_category = Category::create([
            'title' => $request->title,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $request->title))),
            'description' => $request->description,
            'sort_order' => $request->sort_order,
            'status' => $request->status,
            'img_url' => $img_url
        ]);
        $request->session()->flash('alert-success', 'Category Created successfully');
        return redirect('admin/category/index');
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
        $old_data = Category::where('id',$request->id)->first();
        return view('admin.category.update',compact('old_data'));
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
        $request->validate([
            'title' => 'nullable|min:3',
            'sort_order' => 'nullable|integer',
        ]);
        $img_url = null;
        if(empty($request->img_url)){
            $img_url = $request->old_img_url;
        }
        else{
            if($request->hasFile('img_url')){
                $old_image = public_path($request->old_img_url);  // prev image path
                if(is_file($old_image)){
                    unlink($old_image);
                }
                else{
                    // dd('no file');
                }
                $image = $request->file('img_url');
                $name = preg_replace("/[^a-z0-9\._]+/", "-", strtolower(time() . rand(1, 9999) . '.' . $image->getClientOriginalName()));
                if($image->move(public_path().'/uploads/category', str_replace(" ", "", $name))){
                    $img_url = '/uploads/category/'.$name;
                }
            }
        }
        $update_category = Category::where('id',$request->id)->update([
            'title' => $request->title,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $request->title))),
            'description' => $request->description,
            'sort_order' => $request->sort_order,
            'status' => $request->status,
            'img_url' => $img_url
        ]);
        $request->session()->flash('alert-success', 'Category Updated successfully');
        return redirect('admin/category/index');
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
