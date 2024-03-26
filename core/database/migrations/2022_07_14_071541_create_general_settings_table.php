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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('sitename')->nullable();
            $table->boolean('dark')->default(0);
            $table->string('cur_text')->nullable();
            $table->string('cur_sym')->nullable();
            $table->string('email_from')->nullable();
            $table->longText('email_template')->nullable();
            $table->string('sms_api')->nullable();
            $table->string('base_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->longText('mail_config')->nullable();
            $table->longText('sms_config')->nullable();
            $table->boolean('ev')->default(0);
            $table->boolean('en')->default(0);
            $table->boolean('sv')->default(0);
            $table->boolean('sn')->default(0);
            $table->boolean('force_ssl')->default(0);
            $table->boolean('secure_password')->default(0);
            $table->boolean('agree')->default(0);
            $table->boolean('registration')->default(0);
            $table->string('active_template')->nullable();
            $table->longText('sys_version')->nullable();
            $table->longText('apple_store_link')->nullable();
            $table->longText('google_play_link')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
