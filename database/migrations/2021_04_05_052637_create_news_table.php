<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->text('video')->nullable();
            $table->text('tags');

            // PL;
            $table->text('pl_headline');
            $table->text('pl_slug');
            $table->longText('pl_details');
            $table->text('pl_seo_title');
            $table->text('pl_seo_tag')->nullable();
            $table->text('pl_seo_description')->nullable();

            // SL;
            $table->text('sl_headline')->nullable();
            $table->text('sl_slug')->nullable();
            $table->longText('sl_details')->nullable();
            $table->text('sl_seo_title')->nullable();
            $table->text('sl_seo_tag')->nullable();
            $table->text('sl_seo_description')->nullable();

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
        Schema::dropIfExists('news');
    }
}
