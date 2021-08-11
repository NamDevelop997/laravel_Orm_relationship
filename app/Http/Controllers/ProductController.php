<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    function show()
    {
        DB::table('products')->get();
        // dd($productsList);
    }

    function edit($id)
    {
        DB::table('products')->where('id', $id)->update([
            'name' => 'Phan trung Nguyen',
            'price' => 299
        ]);
    }

    function add()
    {
        DB::table('products')->insert([
            'name' => 'Nguyen Thi Hue',
            'price' => '22222',
            'product_cat_id' => '1',
            'user_id' => '2'
        ]);
    }

    function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
    }

    function read(){
        $products = Product::destroy(2);
         return $products;
    }
}
