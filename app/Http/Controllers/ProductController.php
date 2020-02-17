<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use App\ProductCategory;
use App\Http\Requests\ProductFormPost;

class ProductController extends Controller
{
  function index()
  {
    $categories = ProductCategory::all();
    return view('products.index', compact('categories'));
  }

  function product_insert(ProductFormPost $request)
  {
    Product::insert([
      'product_name'  =>$request->product_name,
      'product_price' =>$request->product_price,
      'product_category' =>$request->product_category,
      'created_at'    =>Carbon::now(),
      'updated_at'    =>Carbon::now(),
    ]);
    return back();
  }
  function product_list()
  {
    $lists = Product::all();
    $trashed_products = Product::onlyTrashed()->get();
    return view('products.list', compact('lists', 'trashed_products'));
  }
  function product_edit($product_id)
  {
     $categories = ProductCategory::all();
     $lists = Product::findOrFail($product_id);
     return view('products.edit', compact('lists', 'categories'));
  }
  function product_update(Request $request)
  {
    Product::findOrFail($request->product_id)->update([
     'product_name'   =>$request->product_name,
     'product_price'  =>$request->product_price,
     'product_category'  =>$request->product_category,
   ]);
   return back();
  }
  function product_delete($product_id)
  {
   Product::findOrFail($product_id)->delete();
   return back();
  }
  function product_restore($product_id)
  {
   Product::withTrashed()->where('id', $product_id)->restore();
   return back()->withSuccess('Product restored');
  }
  function product_hDelete($product_id)
  {
    Product::withTrashed()->where('id', $product_id)->forceDelete();
    return back()->withDelete('Product permanently deleted');
  }

  // Category
  function product_category()
  {
    $categories = ProductCategory::all();
    return view('products.product_category', compact('categories'));
  }
  function add_category(Request $request)
  {
     ProductCategory::insert([
       'product_category' =>$request->product_category,
       'created_at'       =>Carbon::now(),
       'updated_at'       =>Carbon::now(),
     ]);
     return back();
  }
  function delete_category($category_id)
  {
     ProductCategory::findOrFail($category_id)->delete();
     return back();
  }


  // END
}
