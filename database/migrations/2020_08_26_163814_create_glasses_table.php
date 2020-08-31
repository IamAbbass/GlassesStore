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
            $table->boolean('is_available')->default(true);
            $table->timestamps();
            $table->softDeletes();
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
