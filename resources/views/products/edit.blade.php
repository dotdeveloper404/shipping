@extends('layouts.master')
@section('title', 'Product')

@section('content')

<div class="content">
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-table'></i> Product Catalog</h1>
        <h3></h3>
    </div>
    <!-- Page Heading End-->
    <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('product.index')}}">View Product List</a>
            <div class="widget">
                <div class="widget-header transparent">

                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="table-responsive">
                        <div class="widget">
                            @if(session()->has('msg'))
                            @if(session()->get('msg')['type'] == 'success')
                            <div class="alert alert-success">{{ session()->get('msg')['text'] }}</div>
                            @endif
                            @if(session()->get('msg')['type'] == 'error')
                            <div class="alert alert-danger">{{ session()->get('msg')['text'] }}</div>
                            @endif
                            @endif

                            <div class="widget-header transparent">
                                <h2><strong>Edit Product</strong> Form</h2>
                            </div>
                            <div class="widget-content padding">

                                @if($errors->any())
                                {!! implode('', $errors->all('<div style="color:red;">:message</div>')) !!}
                                @endif

                                <div id="basic-form">
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{route('product.update',$product)}}" role="form">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Product Name</label>
                                                <input type="text" value="{{$product->product_name}}"
                                                    name="product_name" class="form-control" id=""
                                                    placeholder="product name">
                                            </div>

                                            <div class="form-group">
                                                <label for="">* SKU</label>
                                                <input type="text" value="{{$product->sku}}" required name="sku"
                                                    class="form-control" id="" placeholder="SKU">
                                            </div>
                                            <div class="form-group">
                                                <label for="">UPC</label>
                                                <input type="text" value="{{$product->upc}}" required name="upc"
                                                    class="form-control" id="" placeholder="UPC">
                                            </div>

                                            <div class="form-group">
                                                <label for="">ASIN</label>
                                                <input type="text" value="{{$product->asin}}" required name="asin"
                                                    class="form-control" id="" placeholder="ASIN">
                                            </div>

                                            <div class="form-group">
                                                <label for="">ISBN</label>
                                                <input type="text" value="{{$product->isbn}}" required name="isbn"
                                                    class="form-control" id="" placeholder="ISBN">
                                            </div>

                                            <div class="form-group">
                                                <input type="file" name="image" class="btn btn-default"
                                                    title="product image">
                                                <p class="help-block">select product image .</p>
                                                <img src="storage/products/{{$product->image}}" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="">Low Stock Threshold</label>
                                                <input type="text" value="{{$product->low_stock_threshold}}" required
                                                    name="low_stock_threshold" class="form-control" id=""
                                                    placeholder="">
                                            </div>


                                            <div class="form-group">
                                                <label for="">Safety Stock</label>
                                                <input type="text" value="{{$product->safety_stock}}" required
                                                    class="form-control" name="safety_stock" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Max Available Quantity</label>
                                                <input type="text" value="{{$product->max_available_quantity}}" required
                                                    class="form-control" name="max_available_quantity" id=""
                                                    placeholder="">
                                            </div>


                                            <div class="form-group">
                                                <label for="">Lead Time</label>
                                                <input type="text" value="{{$product->lead_time}}" required
                                                    name="lead_time" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Weight</label>
                                                <input type="text" value="{{$product->weight_lbs}}" required
                                                    name="weight_lbs" class="form-control" id="" placeholder="0 lbs">
                                                <input type="text" value="{{$product->weight_oz}}" required
                                                    name="weight_oz" class="form-control" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Tags</label>
                                                <input type="text" value="{{$product->tags}}" required name="tags"
                                                    class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dimensions</label>
                                                <input type="text" value="{{$product->dimensions_l}}" required
                                                    name="dimensions_l" class="form-control" id="" placeholder="L">
                                                <input type="text" value="{{$product->dimensions_w}}" required
                                                    name="dimensions_w" class="form-control" id="" placeholder="W">

                                                <input type="text" value="{{$product->dimensions_h}}" required
                                                    name="dimensions_h" class="form-control" id="" placeholder="H">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Warehouse Bin</label>
                                                <input type="text" value="{{$product->warehouse_bin}}" required
                                                    name="warehouse_bin" class="form-control" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Declared Value</label>
                                                <input type="text" value="{{$product->declared_value}}" required
                                                    name="declared_value" class="form-control" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Harmonized Code</label>
                                                <input type="text" value="{{$product->harmonized_code}}" required
                                                    name="harmonized_code" class="form-control" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Country of Manufacture</label>
                                                <input type="text" value="{{$product->country_of_manufacture}}" required
                                                    name="country_of_manufacture" class="form-control" id=""
                                                    placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Wholesale of Price</label>
                                                <input type="text" value="{{$product->wholesale_price}}" required
                                                    name="wholesale_price" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Category</label>
                                                <select name="category" class="form-control">
                                                    @foreach($categories as $category)
                                                    <option {{$category->id==$product->category ? 'selected' : '' }}
                                                        value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class="form-control">
                                                    <option {{$product->status==1 ? 'selected' : '' }} value="1">Active
                                                    </option>
                                                    <option {{$product->status==0 ? 'selected' : '' }} value="0">
                                                        InActive</option>
                                                </select>
                                            </div>


                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection