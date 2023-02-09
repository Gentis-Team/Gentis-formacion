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
        Schema::create('courses_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('courses_id')->unsigned();
            $table->unsignedBiginteger('categories_id')->unsigned();
            
            $table->foreign('courses_id')->references('id')
            ->on('courses')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')
            ->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_categories');
    }
};
