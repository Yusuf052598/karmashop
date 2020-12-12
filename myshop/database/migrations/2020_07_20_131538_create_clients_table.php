<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('user_id')->nullable()->index();
            $table->unsignedInteger('shop_id')->nullable()->index();
            $table->unsignedInteger('city_id')->nullable()->index();
            $table->string('place');
            $table->string('count');
            $table->enum('status',['0','1']);
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
        Schema::dropIfExists('clients');
    }
}
