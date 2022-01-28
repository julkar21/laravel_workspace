<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increment('id');
            $table->string('name',128);
            $table->string('email',128)->unique();
            $table->string('phone',32)->unique();
            $table->string('password',128);
            $table->tinyInteger('email_verified_at')->nullable(0);
            $table->string('email_verification_token',80)->nullable;
            $table->string('facebook_id',32)->nullable;
            $table->string('google_id',32)->nullable;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
