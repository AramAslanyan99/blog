<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with(['brand'])->get();
        foreach ($products as $product) {
            echo 'Product name :' . $product->title . '<br />';
            echo 'Brand        :' . $product->brand->brand_name . '<br />';
            echo '---------------------------------------------' . '<br />';
        }
    }
    public function store()
    {
        //
        $brand_id = 1;
        $product = Product::create([
            'title' => 'Shoes Futsal Adidas',
            'price' => '230',
            'brand_id' => $brand_id
        ]);
        $product->save();
        // we can use method sync for update or delete $category_id
        // $product->categories()->sync($category_id);
        dd ($product->title);exit;
    }
    public function showData()
    {
        $product = Product::with(['categories'])->get();
        dd($product->toArray());
    }
}
