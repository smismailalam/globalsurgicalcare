<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductPicture;
use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use App\Http\Requests;
use Illuminate\Support\Facades\File;

class ProductController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->specification = $request->input('specification');
        $product->unit = $request->input('unit');
        $product->price = $request->input('price');
        $product->save();
        $save_product = Product::orderBy('id', 'DESC')->first();
        $files = $request->file('photos');        
        if($files != ""){
            foreach ($files as $file){ 
                $ext = $file->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' .$ext;
                $image = Image::make($file);
                $image->resize(120, 120);
                $image->save(base_path().'/public/uploads/'. $fileName);
                $path = public_path('uploads/' . $fileName);
                Image::make($file->getRealPath())->resize(120, 120)->save($path);
                $product_pictures = new ProductPicture();
                $product_pictures->product_id = $save_product->id;
                $product_pictures->filename = '/uploads/' . $fileName;
                $product_pictures->save();
            }
        }
        Session::flash('flash_message', 'product information is stored successfully!');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
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
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->specification = $request->input('specification');
        $product->unit = $request->input('unit');
        $product->price = $request->input('price');
        $product->save();
        $files = $request->file('photos');
        
        if($request->hasFile('photos') == 1){
            $product_pictures = ProductPicture::where('product_id' , $id)->get();
            foreach($product_pictures as $product_picture){
                $filename = $product_picture->filename;
                $file_path = public_path().$filename;
                unlink($file_path);
            }
            ProductPicture::where('product_id', $id)->delete();
            foreach ($files as $file){ 
                $ext = $file->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' .$ext;
                $image = Image::make($file);
                $image->resize(120, 120);
                $image->save(base_path().'/public/uploads/'. $fileName);
                $path = public_path('uploads/' . $fileName);
                Image::make($file->getRealPath())->resize(120, 120)->save($path);
                $product_pictures = new ProductPicture();
                $product_pictures->product_id = $id;
                $product_pictures->filename = '/uploads/' . $fileName;
                $product_pictures->save();
            }
        }
        Session::flash('flash_message', 'Product information is updated successfully!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Product::destroy($id)){
            $product_pictures = ProductPicture::where('product_id' , $id)->get();
            foreach($product_pictures as $product_picture){
                $filename = $product_picture->filename;
                $file_path = public_path().$filename;
                unlink($file_path);
            }
            ProductPicture::where('product_id', $id)->delete();
            Session::flash('deleted_message', 'product information is deleted successfully!');
            // return redirect()->back();
            return redirect()->route('product.index');
        }
    }
}
