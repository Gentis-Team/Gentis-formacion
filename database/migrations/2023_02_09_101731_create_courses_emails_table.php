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
        Schema::create('courses_emails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('course_id')->unsigned();
            $table->unsignedBiginteger('email_id')->unsigned();
            
            $table->foreign('course_id')->references('id')
            ->on('courses')->onDelete('cascade');
            $table->foreign('email_id')->references('id')
            ->on('emails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_emails');
    }
};
