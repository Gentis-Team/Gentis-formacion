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
            $table->unsignedBiginteger('course_id')->unsigned();
            $table->unsignedBiginteger('category_id')->unsigned();
            
            $table->foreign('course_id')->references('id')
            ->on('courses')->onDelete('cascade');
            $table->foreign('category_id')->references('id')
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
