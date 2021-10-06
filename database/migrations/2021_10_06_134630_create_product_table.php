<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('p_name',30);
            $table->string('p_code',20);
            $table->string('p_desc',200);
            $table->string('p_price',20);
            $table->string('p_quantity',20);
            $table->string('p_stock_date',30);
            $table->string('p_purchased',20);
            $table->string('p_ratig',20);
            $table->string('p_category',20);
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
        Schema::dropIfExists('product');
    }
}
