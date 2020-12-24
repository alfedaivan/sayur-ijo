<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Site extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('twitter');
	    $table->string('email');
            $table->string('instagram');
            $table->string('nomor_wa');
            $table->string('alamat');
            $table->text('about');
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
        //
    }
}
