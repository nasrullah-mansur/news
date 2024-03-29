<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('theme_name');
            $table->string('logo');
            $table->string('footer_logo');
            $table->string('favicon');
            $table->string('pl_name');
            $table->string('pl_flag');
            $table->string('sl_name');
            $table->string('sl_flag');
            $table->longText('google_map');
            $table->text('pl_address');
            $table->text('pl_support_hour');
            $table->text('sl_address');
            $table->text('sl_support_hour');
            $table->text('quick_contact');
            $table->string('copyright');
            $table->text('google_map_script');
            $table->string('layout')->default('ltr');
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
        Schema::dropIfExists('themes');
    }
}
