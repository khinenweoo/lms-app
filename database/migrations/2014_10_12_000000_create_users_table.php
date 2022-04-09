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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob')->nullable()->default(null);
            $table->enum('gender', ['male','female'])->nullable();
            $table->string('avatar_photo')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->text('about')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->integer('status')->default(1)->comment('0 - disabled, 1 - enabled');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
