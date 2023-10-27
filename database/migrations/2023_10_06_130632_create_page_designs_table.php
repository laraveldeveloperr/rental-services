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
        Schema::create('page_designs', function (Blueprint $table) {
            $table->id();
            $table->integer('topbar')->default(0);
            $table->integer('header')->default(0);
            $table->integer('menu')->default(0);
            $table->integer('slide')->default(0);
            $table->integer('search')->default(0);
            $table->integer('about_us_section')->default(0);
            $table->integer('banner1')->default(0);
            $table->integer('banner2')->default(0);
            $table->integer('blogs')->default(0);
            $table->integer('comments_for_site')->default(0);
            $table->integer('members')->default(0);
            $table->integer('offers')->default(0);
            $table->integer('services')->default(0);
            $table->string('home_about_section_image')->nullable();
            $table->string('banner1_image')->nullable();
            $table->string('banner2_image')->nullable();
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
        Schema::dropIfExists('page_designs');
    }
};
