<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function productsRead($id)
  {
    $product = Product::find($id);

    return view('pages.products.read', compact('product'));
  }

  public function adminProductsRead($id)
  {
    $product = Product::find($id);

    return view('admin.pages.products.read', compact('product'));
  }

  public function createProduct(Request $request)
  {
    //
  }

  public function updateProduct(Request $request)
  {
    //
  }

  public function deleteProduct(Request $request)
  {
    $product = Product::find($request->productID);
    $product->trashed = true;
    $product->save();
  }
}
