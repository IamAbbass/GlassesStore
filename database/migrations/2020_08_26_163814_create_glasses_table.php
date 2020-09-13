<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateGlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glasses', function (Blueprint $table) {
           
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->longText('description');
            $table->string('image');
            $table->string('color');            
            $table->string('price');
            $table->string('gender');
            $table->boolean('is_available')->default(true);
            $table->boolean('is_deleted')->default(false);
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
        Schema::dropIfExists('glasses');
        $table->dropSoftDeletes();
    }
}
