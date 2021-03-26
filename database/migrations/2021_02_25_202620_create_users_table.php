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
            $table->integer('phone');
            $table->date('date');
            $table->integer('groupe_id')->unsigned();
            $table->integer('ville_id')->unsigned();
            $table->enum('methode_contact', ['appel', 'sms','appel + sms ']);
            $table->enum('time_contact', ['8h-15h', '15h-23h','24h/24h ']);
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('groupe_id')->references('id')->on('groupe')
            ->onDelete('cascade');
            $table->foreign('ville_id')->references('id')->on('ville')
            ->onDelete('cascade');
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
