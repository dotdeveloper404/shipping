<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category_data')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::get();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'sku' => 'required',
            'upc' => 'required',
            'asin' => 'required',
            'isbn' => 'required',
            'low_stock_threshold' => 'required',
            'safety_stock' => 'required',
            'max_available_quantity' => 'required',
            'lead_time' => 'required',
            'weight_lbs' => 'required',
            'weight_oz' => 'required',
            'tags' => 'required',
            'dimensions_l' => 'required',
            'dimensions_w' => 'required',
            'dimensions_h' => 'required',
            'warehouse_bin' => 'required',
            'declared_value' => 'required',
            'harmonized_code' => 'required',
            'country_of_manufacture' => 'required',
            'declared_value' => 'required',
            'category' => 'required',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
        }

        $request['image'] = $filename;

        Product::create($request->merge(['image' => $filename])->except('csrf'));

        return redirect()->route('product.index')->withMsg(['type' => 'success', 'text' => 'created successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProductCategory::get();
        $product = Product::findOrfail($id);
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'sku' => 'required',
            'upc' => 'required',
            'asin' => 'required',
            'isbn' => 'required',
            'low_stock_threshold' => 'required',
            'safety_stock' => 'required',
            'max_available_quantity' => 'required',
            'lead_time' => 'required',
            'weight_lbs' => 'required',
            'weight_oz' => 'required',
            'tags' => 'required',
            'dimensions_l' => 'required',
            'dimensions_w' => 'required',
            'dimensions_h' => 'required',
            'warehouse_bin' => 'required',
            'declared_value' => 'required',
            'harmonized_code' => 'required',
            'country_of_manufacture' => 'required',
            'wholesale_price' => 'required',
            'category' => 'required',
        ]);

        $product->update($request->except('csrf,_method'));

        return redirect()->route('product.index')->withMsg(['type' => 'success', 'text' => 'updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
