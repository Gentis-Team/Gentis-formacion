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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('image');
            $table->integer('duration_theory');
            $table->integer('duration_practice');
            $table->date('start_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->text('description');
            $table->string('modality');
            $table->string('info_file');
            $table->unsignedBiginteger('center_id')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
