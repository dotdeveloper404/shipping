@extends('layouts.master')
@section('title', 'Order Create')

@section('content')

<div class="content">
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-table'></i> Order Create</h1>
        <h3></h3>
    </div>
    <!-- Page Heading End-->
    <!-- Your awesome content goes here -->
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('order.index') }}">Orders</a>
            <div class="widget">
                <div class="widget-header">
                    <h2></h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <div class="widget animated fadeInDown">
                        <p>Welcome to ShippingEasy</p>
                        <h3>Let's get ready to ship</h3>
                        <hr>
                        <form id="orderCreateWizard">
                            <section class="step" data-step-title="Add Another Order">
                                <div class="">
                                    <h4>Add Another Order</h4>
                                    <p>Add more of your stores or enter a manual order</p>
                                    <hr>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <i class="glyphicon glyphicon-ok text-success"></i>
                                            <span>&nbsp;</span>
                                            <span>CSV Orders store "CSV Orders Store"</span>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="glyphicon glyphicon-ok text-success"></i>
                                            <span>&nbsp;</span>
                                            <span>Manual Orders: 1 added</span>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:;">
                                                <i class="glyphicon glyphicon-plus text-primary"></i>
                                                <span>&nbsp;</span>
                                                <span class="text-primary">Connect another store</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#addAnOrder" data-toggle="collapse">
                                                <i class="glyphicon glyphicon-plus text-primary"></i>
                                                <span>&nbsp;</span>
                                                <span class="text-primary">Add another manual order</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="notes collapse" id="addAnOrder">
                                    <h4>Add an Order</h4>
                                    <p>Enter a name and address to create a manual order</p>
                                    <hr>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="international_address">
                                                        <input type="checkbox" name="international_address" id="international_address" class="form-control">
                                                        <span>International Address</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">First Name <i class="text-danger">*</i></label>
                                                    <input type="text" name="first_name" id="first_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name <i class="text-danger">*</i></label>
                                                    <input type="text" name="last_name" id="last_name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="company">Company <i class="text-success">(Optional)</i></label>
                                                    <input type="text" name="company" id="company" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address1">Address Line 1 <i class="text-danger">*</i></label>
                                                    <input type="text" name="address1" id="address1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address2">Address Line 2 <i class="text-success">(Optional)</i></label>
                                                    <input type="text" name="address2" id="address2" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="city">City <i class="text-danger">*</i></label>
                                                    <input type="text" name="city" id="city" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="province">Province <i class="text-danger">*</i></label>
                                                    <input type="text" name="province" id="province" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="state">State <i class="text-danger">*</i></label>
                                                    <select name="state" id="state" class="form-control">
                                                        <option value=""></option>
                                                        @foreach(get_states() as $code => $state)
                                                            <option vlau="{{ $code }}">{{ $state }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="zip_code">Zip Code <i class="text-danger">*</i></label>
                                                    <input type="text" name="zip_code" id="zip_code" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="country">Country <i class="text-danger">*</i></label>
                                                    <select name="country" id="country" class="form-control">
                                                        <option value=""></option>
                                                        @foreach(get_countries() as $country)
                                                            <option vlau="{{ $country }}">{{ $country }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email <i class="text-danger">*</i></label>
                                                    <input type="text" name="email" id="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone_number">Phone Number <i class="text-danger">*</i></label>
                                                    <input type="text" name="phone_number" id="phone_number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="save_customer_address">
                                                        <input type="checkbox" name="save_customer_address" id="save_customer_address" class="form-control">
                                                        <span>Save Customer Address</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="order_number">Order Number <i class="text-danger">*</i></label>
                                                    <input type="text" name="order_number" id="order_number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="order_date">Order Date <i class="text-danger">*</i></label>
                                                    <input type="date" name="order_date" id="order_date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shipping_paid">Shipping Paid <i class="text-danger">*</i></label>
                                                    <input type="text" name="shipping_paid" id="shipping_paid" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="order_total">Order Total <i class="text-danger">*</i></label>
                                                    <input type="text" name="order_total" id="order_total" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="order-products-wrap">
                                            <div>
                                                <h3>Add Items</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="products"><i class="glyphicon glyphicon-plus text-success"></i> Add another item</label>
                                                            <select id="products" class="form-control">
                                                                <option value=""></option>
                                                                <option value="Product One">Product One</option>
                                                                <option value="Product Two">Product Two</option>
                                                                <option value="Product Three">Product Three</option>
                                                                <option value="Product Four">Product Four</option>
                                                                <option value="Product Five">Product Five</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reapeter-wrap">
                                                <div class="reapeter-item">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="item_name">Item Name <i class="text-danger">*</i></label>
                                                                <input type="text" name="item_name" id="item_name" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="sku">SKU <i class="text-danger">*</i></label>
                                                                <input type="text" name="sku" id="sku" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="item_price">Item Price <i class="text-danger">*</i></label>
                                                                <input type="text" name="item_price" id="item_price" class="form-control" vlaue="0.00">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="quantity">Quantity <i class="text-danger">*</i></label>
                                                                <input type="text" name="quantity" id="quantity" class="form-control" vlaue="1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="warehouse_bin">Warehouse Bin <i class="text-danger">*</i></label>
                                                                <input type="text" name="warehouse_bin" id="warehouse_bin" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="weight_lb">Weight lb <i class="text-danger">*</i></label>
                                                                        <input type="text" name="weight_lb" id="weight_lb" class="form-control" vlaue="0">
                                                                    </div>    
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="weight_oz">Weight oz <i class="text-danger">*</i></label>
                                                                        <input type="text" name="weight_oz" id="weight_oz" class="form-control" vlaue="0">
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="step" data-step-title="Select a label layout">
                            </section>
                            <section class="step" data-step-title="Add shipping carrier">
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
@endpush

@push('scripts')
<script src="{{ asset('admin/assets/libs/jquery-wizard/jquery.easyWizard.js') }}"></script>
@endpush