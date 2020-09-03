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
<<<<<<< HEAD
            $table->integer('customer_id');
            $table->integer('glass_id');
           
=======
       
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc5d4b65a4d9f38d3f77de05c0e01e8d3bd42919
=======
>>>>>>> dc5d4b65a4d9f38d3f77de05c0e01e8d3bd42919
=======
>>>>>>> dc5d4b65a4d9f38d3f77de05c0e01e8d3bd42919
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
