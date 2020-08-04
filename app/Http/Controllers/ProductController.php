<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('products.index',['products' => $products]);
      // or we can use compact comapct('products')
      // that will assign variable with that name to same named key
    }

    public function edit(Request $request){
      $product = Product::find($request->route('id'));
      return view('products.edit',['product' => $product]);
    }

    public function create(){
      return view('products.edit');
    }

    public function createAction(Request $request){
      return $request->all();
      // create product
      // redirect to product index page
    }

    public function editAction(Request $request){
      return $request->all();
      // load product by request id
      // edit product
      // redirect to product index page
    }
}
