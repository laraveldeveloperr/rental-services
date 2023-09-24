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
        Schema::create('brons', function (Blueprint $table) {
            $table->id();
            $table->string('bron_number')->unique();
            $table->foreignId('brands_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('models_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('cars_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->date('pick_up');
            $table->date('drop_off');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->text('special_request')->nullable();
            $table->double('price');
            $table->double('discounted_price');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('brons');
    }
};
