<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    private const USER_TABLE = 'Product';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::USER_TABLE, function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name', 256);
            $table->decimal('product_price');
            $table->integer('product_stocks');
            $table->date('product_expiry_date'); // the earliest date 
            $table->string('product_category');
            $table->string('product_path_img');
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
