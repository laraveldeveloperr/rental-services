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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brands_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('models_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ban_types_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('fuels_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('gears_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('transmissions_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('engines_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('colors_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('licence_plate');
            $table->string('manufacturing_year');
            $table->double('day_price');
            $table->double('week_price')->nullable();
            $table->double('month_price')->nullable();
            $table->string('main_image');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('cars');
    }
};
