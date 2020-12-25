<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('sku');
            $table->string('sku_aliases');
            $table->string('upc');
            $table->string('asin');
            $table->string('isbn');
            $table->string('low_stock_threshold');
            $table->string('safety_stock');
            $table->string('max_available_quantity');
            $table->string('lead_time');
            $table->string('weight_lbs');
            $table->string('weight_oz');
            $table->string('tags');
            $table->string('dimensions_l');
            $table->string('dimensions_w');
            $table->string('dimensions_h');
            $table->string('warehouse_bin');
            $table->string('declared_value');
            $table->string('harmonized_code');
            $table->string('country_of_manufacture');
            $table->string('wholesale_price');
            $table->string('category');
            $table->string('status');
            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
