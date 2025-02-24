<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return view('index', compact('products'));
  }

  public function register(ProductRequest $request)
  {
    
  $product = $request->only(['name', 'price', 'image', 'season' , 'description']);
  return view('register', compact('product'));
  }

}
