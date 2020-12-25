<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('low_stock_threshold')->nullable();
            $table->string('safety_stock')->nullable();
            $table->string('weight_lbs')->nullable();
            $table->string('weight_oz')->nullable();
            $table->string('dimension_l')->nullable();
            $table->string('dimension_w')->nullable();
            $table->string('dimension_h')->nullable();
            $table->string('harmonized_code')->nullable();
            $table->string('country_of_manufacture')->nullable();
            $table->string('declared_value')->nullable();
            $table->string('wholesale_price')->nullable();

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
        Schema::dropIfExists('product_category');
    }
}
