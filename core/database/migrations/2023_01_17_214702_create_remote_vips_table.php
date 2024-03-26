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
        Schema::create('remote_vips', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title',100)->nullable();
            $table->string('slug',200)->nullable();
            $table->string('address',200)->nullable();
            $table->string('friendly_address',200)->nullable();
            $table->string('country',200)->nullable();
            $table->string('map_id',200)->nullable();
            $table->string('longitude',200)->nullable();
            $table->string('latitude',200)->nullable();
            $table->longText('details')->nullable();
            $table->string('phone',200)->nullable();
            $table->string('email',200)->nullable();
            $table->string('image',200)->nullable();
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
        Schema::dropIfExists('remote_vips');
    }
};
