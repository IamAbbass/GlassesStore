<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('phone');
            $table->boolean('is_verified');
            $table->longText('address');
            $table->text('location');
            $table->longText('notes');
            $table->string('gender');
            $table->string('status');
            $table->boolean('is_deleted')->default(false);
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('glass_id')->unsigned();
            $table->foreign('glass_id')->references('id')->on('glasses');
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
        Schema::dropIfExists('orders');
    }
}
