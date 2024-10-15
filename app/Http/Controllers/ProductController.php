<?php

namespace App\Http\Controllers;

use App\Http\Requests\RpoductRequest;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::get();
        return view('site.products.index', compact('products'));
    }
    public function show(ProductModel $product)
    {
        // dd($id);

        return view('site.products.show', data: compact('product'));
    }

    public function create()
    {
        return view('site.products.create');
    }
    public function edit($id)
    { 
        $product = ProductModel::find($id);

// dd($product);
        
        return view('site.products.edit', compact('product'));
     }
     public function update(Request $request, $id)
     {
         $product = ProductModel::find($id);
         $product->update($request->all());
         return redirect()->route('products.index')->with('success', 'Product updated successfully');
     }
    public function store(RpoductRequest $request)
    {
        
        $product =ProductModel::create($request->validated());
        return         redirect()->back()->with('success','stored successfully');
     }
 
    public function destroy(ProductModel $product)
    {
        $product->delete();      
        return         redirect()->back()->with('success','deleted successfully');

     }
}

