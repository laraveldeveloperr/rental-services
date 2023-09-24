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
        Schema::create('car_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cars_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('who_shared');
            $table->string('name_surname');
            $table->text('comment');
            $table->integer('status');
            $table->date('comment_date');
            $table->softDeletes();
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
        Schema::dropIfExists('car_comments');
    }
};
