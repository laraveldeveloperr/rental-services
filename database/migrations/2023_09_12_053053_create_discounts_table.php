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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brands_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('models_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('cars_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('type');
            $table->double('discount', 10, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('status');
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
        Schema::dropIfExists('discounts');
    }
};
