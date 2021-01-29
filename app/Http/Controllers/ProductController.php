<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publicaton_status',1)->get();

        return view('admin.product.add-product',[
            'categories'=> $categories,
            'brands'=> $brands
        ]);
    }

    public function saveProduct(Request $request){

        // $this->validate($request,[
        //     'product_name'=>'required',
        //     'product_price'=>'required',
        //     'product_quantity'=>'required',
        //     'short_desc'=>'required',
        //     'long_desc'=>'required',
        //     'product_image'=>'required'
        // ]);

        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'admin/product-images/';
        $imageUrl = $directory.$imageName;
        $productImage -> move($directory,$imageName);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        $product->product_image = $imageUrl;
        $product->publicaton_status = $request->publicaton_status;

        $product->save();
        return redirect('/product/add')->with('message','Product save successfully');
    }
}
