<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->text('pl_one');
            $table->text('sl_one');
            $table->text('pl_two');
            $table->text('sl_two');
            $table->text('pl_three');
            $table->text('sl_three');
            $table->text('pl_four');
            $table->text('sl_four');
            $table->text('pl_five');
            $table->text('sl_five');
            $table->text('pl_six');
            $table->text('sl_six');
            $table->text('pl_seven');
            $table->text('sl_seven');
            $table->text('pl_eight');
            $table->text('sl_eight');
            $table->text('pl_nine');
            $table->text('sl_nine');
            $table->text('pl_ten');
            $table->text('sl_ten');
            $table->text('pl_eleven');
            $table->text('sl_eleven');
            $table->text('pl_twelve');
            $table->text('sl_twelve');
            $table->text('pl_thirteen');
            $table->text('sl_thirteen');
            $table->text('pl_fourteen');
            $table->text('sl_fourteen');
            $table->text('pl_fifteen');
            $table->text('sl_fifteen');
            $table->text('pl_sixteen');
            $table->text('sl_sixteen');
            $table->text('pl_seventeen');
            $table->text('sl_seventeen');
            $table->text('pl_eighteen');
            $table->text('sl_eighteen');
            $table->text('pl_nineteen');
            $table->text('sl_nineteen');
            $table->text('pl_twenty');
            $table->text('sl_twenty');
            $table->text('pl_twenty_one');
            $table->text('sl_twenty_one');
            $table->text('pl_twenty_two');
            $table->text('sl_twenty_two');
            $table->text('pl_twenty_three');
            $table->text('sl_twenty_three');
            $table->text('pl_twenty_four');
            $table->text('sl_twenty_four');
            $table->text('pl_twenty_five');
            $table->text('sl_twenty_five');
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
        Schema::dropIfExists('translations');
    }
}
