<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWizardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wizards', function (Blueprint $table) {
            $table->id();
            $table->integer('trending_news_count');
            $table->integer('sport_news_count');
            $table->integer('entertainment_news_count');
            $table->integer('video_news_count');
            $table->integer('news_per_page');
            $table->integer('recent_news_count');
            $table->integer('related_news_count');
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
        Schema::dropIfExists('wizards');
    }
}
