<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplement', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('brand', 255);
            $table->string('ingredients', 2000);
            $table->integer('quantity');
            $table->string('description', 2000);
            $table->string('use', 2000);
            $table->float('price', 4, 2);
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
        Schema::dropIfExists('supplement');
    }
}
