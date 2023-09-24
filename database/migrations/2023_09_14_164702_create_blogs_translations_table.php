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
        Schema::create('blogs_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blogs_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->string('slug');
            $table->timestamps();

            $table->unique(['blogs_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs_translations');
    }
};
