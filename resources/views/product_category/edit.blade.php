@extends('layouts.master')
@section('title', 'Product')

@section('content')

<div class="content">
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-table'></i> Product Category</h1>
        <h3></h3>
    </div>
    <!-- Page Heading End-->
    <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('category.index')}}">View Product Category List</a>
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
                                <h2><strong>Edit Product Category</strong> Form</h2>
                            </div>
                            <div class="widget-content padding">
                                <div id="basic-form">
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{route('category.update',$category)}}" role="form">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""> Name</label>
                                                <input type="text" value="{{$category->name}}" name="name"
                                                    class="form-control" id="" placeholder="name">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <input type="text" value="{{$category->description}}" required
                                                    name="description" class="form-control" id=""
                                                    placeholder="description">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Low Stock Threshold</label>
                                                <input type="text" value="{{$category->low_stock_threshold}}" required
                                                    name="low_stock_threshold" class="form-control" id=""
                                                    placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Safety Stock</label>
                                                <input type="text" required value="{{$category->safety_stock}}"
                                                    class="form-control" name="safety_stock" id="" placeholder="">
                                            </div>



                                            <div class="form-group">
                                                <label for="">Weight</label>
                                                <input type="text" value="{{$category->weight_lbs}}" required
                                                    name="weight_lbs" class="form-control" id="" placeholder="0 lbs">
                                                <input type="text" value="{{$category->weight_oz}}" required
                                                    name="weight_oz" class="form-control" id="" placeholder="0 oz">
                                            </div>


                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="">Dimensions</label>
                                                <input type="text" value="{{$category->dimension_l}}" required
                                                    name="dimension_l" class="form-control" id="" placeholder="L">
                                                <input type="text" value="{{$category->dimension_w}}" required
                                                    name="dimension_w" class="form-control" id="" placeholder="W">

                                                <input type="text" value="{{$category->dimension_h}}" required
                                                    name="dimension_h" class="form-control" id="" placeholder="H">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Declared Value</label>
                                                <input type="text" value="{{$category->declared_value}}" required
                                                    name="declared_value" class="form-control" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Harmonized Code</label>
                                                <input type="text" value="{{$category->harmonized_code}}" required
                                                    name="harmonized_code" class="form-control" id="" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Country of Manufacture</label>
                                                <input type="text" value="{{$category->country_of_manufacture}}"
                                                    required name="country_of_manufacture" class="form-control" id=""
                                                    placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Wholesale of Price</label>
                                                <input type="text" value="{{$category->wholesale_price}}" required
                                                    name="wholesale_price" class="form-control" id="" placeholder="">
                                            </div>


                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
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