<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetshopItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petshop_items', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->decimal('price', 10);
            $table->string('picture');
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->integer('qty');
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
        Schema::dropIfExists('petshop_items');
    }
}
