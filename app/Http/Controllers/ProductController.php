<?php

namespace App\Http\Controllers;

use App\Models\Admin\Hero;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $product=DB::table('products')->get();
        return view('Admin.page1.product.index',compact('product'));
    }


    public function create()
    {
        return view('Admin.page1.product.create');
    }


    public function store(Request $request)
    {
        $product=new Product();
        $product->title=$request->title;
        $product->price=$request->price;
        $product->des=$request->des;
        $file=$request->file('image');
        if (!empty($file)) {
            $image=$file->getClientOriginalName();
            $pathImage="images/product/".$image;
            if (file_exists($pathImage)) {
                $image=bin2hex(random_bytes(10)).$image;
            }
            $file->move("images/product",$image);
            $product->image=$image;
        }
        $product->save();
        return redirect()->route('product.create');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit( $produc)
    {
        $product=Product::findOrFail($produc);
        return view('Admin.page1.product.edit',compact('product'));
    }


    public function update(Request $request, $produc)
    {
        $product=Product::findOrFail($produc);
        $product->title=$request->title;
        $product->price=$request->price;
        $product->des=$request->des;
        $file=$request->file('image');
        if (empty($file)) {
            $image=$product->image;
            $product->image=$image;
        }else{
            $imageRecent=$product->image;
            $pathDelete="images/product/".$imageRecent;
            unlink($pathDelete);
            $imageNow=$file->getClientOriginalName();
            $path="images/product/".$imageNow;
            if (file_exists($path)) {
                $imageNow=bin2hex(random_bytes(10)).$imageNow;
            }

            $file->move("images/product/",$imageNow);
            $product->image=$imageNow;
        }

        $product->save();
        session()->flash("update","Update operation performed successfully");
        return redirect()->route('product.index');

    }


    public function destroy($productId)
    {
        $product=Product::findOrFail($productId);
        $pathImage="images/product/".$product->image;
        unlink($pathImage);
        Product::destroy($productId);
        session()->flash("delete","Clear operation performed successfully");
        return redirect()->route('product.index');
    }
}
