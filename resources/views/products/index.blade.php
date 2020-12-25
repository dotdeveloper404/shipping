@extends('layouts.master')
@section('title', 'Product')

@section('content')

<div class="content">
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-table'></i> Product Table</h1>
        <h3></h3>
    </div>
    <!-- Page Heading End-->
    <!-- Your awesome content goes here -->
    <div class="row">

        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('product.create')}}">Create Product</a>
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Data</strong> Table</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    @if(session()->has('msg'))
                    @if(session()->get('msg')['type'] == 'success')
                    <div class="alert alert-success">{{ session()->get('msg')['text'] }}</div>
                    @endif
                    @if(session()->get('msg')['type'] == 'error')
                    <div class="alert alert-danger">{{ session()->get('msg')['text'] }}</div>
                    @endif
                    @endif

                    <div class="table-responsive">
                        <table data-sortable class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Warehouse Bin</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Sku</th>
                                    <th>Weight</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->warehouse_bin}}</td>
                                    <td>{{$product->category_data->name}}</td>
                                    <td><strong>{{$product->product_name}}</strong></td>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->weight_lbs}} lbs {{$product->weight_oz}}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a data-toggle="tooltip" title="Delete" class="btn btn-default"><i
                                                    class="fa fa-power-off"></i></a>
                                            <a href="{{route('product.edit',$product->id)}}" data-toggle="tooltip"
                                                title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection