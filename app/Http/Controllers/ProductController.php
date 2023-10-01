<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $products = Product::all();
        return view('products.index',[
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $data = $request->validate([
    //         'name'=>'required',
    //         'qty'=>"required | numeric",
    //         'price'=>'required | decimal:2',
    //         'description'=>'nullable'
    //    ]);

        Product::create($request->all());
        // $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)

    {

        // $product = Product::find($product);

        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        // $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('success','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Product $product)
    {
        $product->delete();
        return back()->with('success','product deleted successfully');

    }
}
