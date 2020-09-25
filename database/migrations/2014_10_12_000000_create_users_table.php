<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
           
            // old line of code 
            
            // $table->string('phone');
            // $table->boolean('is_verified');
            // $table->longText('address');
            // $table->text('location');
            // $table->longText('fcm_token')->nullable();
            // $table->longText('notes');
            // $table->string('gender');
            // $table->boolean('is_blocked');
            // $table->boolean('is_deleted')->default(false);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
