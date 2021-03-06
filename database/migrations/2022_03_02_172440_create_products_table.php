<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('pic_url');
            $table->bigInteger('count_of_votes')->unsigned()->nullable();
            $table->string('price');
            $table->jsonb('properties')->nullable();
            $table->string('slug')->unique();
            $table->bigInteger('category_id');
            $table->boolean('in_trade')->nullable();
            $table->timestamps();
        });
    }

    // 'color' => 'black'
    // 'size' => '25'

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
