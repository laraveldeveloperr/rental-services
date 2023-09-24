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
        Schema::create('models_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('models_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();

            $table->unique(['models_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_translations');
    }
};
