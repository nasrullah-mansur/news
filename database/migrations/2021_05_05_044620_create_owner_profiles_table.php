<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id');
            $table->text('facebook')->default('#');
            $table->text('twitter')->default('#');
            $table->text('linkedin')->default('#');
            $table->string('profile')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('owner_profiles');
    }
}
