<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function geDetail($id)
    {
        $single_product = DB::table('posts')->where('id', $id)->first();
        $category_name = $single_product->category_name;
        $category_id = DB::table('categories')->where('name', $category_name)->first();
        $user = DB::table('users')->where('id', $single_product->user_id)->first();
        $product_by = DB::table('posts')->where('status', 'Published')->where('user_id', $single_product->user_id)->limit(12)->get();
        return view('product')->with('single_product', $single_product)->with('category_id', $category_id)->with('user', $user)->with('product_by', $product_by);
    }


    public function getStore($id, $name)
    {

        $single_product = DB::table('posts')->where('id', $id)->first();
        $user = DB::table('users')->where('id', $id)->first();
        $products = DB::table('posts')->where('status', 'Published')->where('user_id', $id)->paginate(20);
        return view('store')->with('single_product', $single_product)->with('user', $user)->with('products', $products);
    }


    public function getProductBycat($name)
    {
        $products = DB::table('posts')->where('status', 'Published')->where('sub_category_name', $name)->paginate(16);
        return view('category')->with('products', $products);
    }
}
