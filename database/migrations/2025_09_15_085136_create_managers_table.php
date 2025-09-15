<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('login');        //username for auth
            $table->string('full_name');    //Name to be used in greetings or "You have logged as: $full_name"

            //TEMPORARY, FIXME
            $table->string('password');     //BAD and again bad for opentext, but I will replace it with Breeze
                                                   //and while I haven't, just to check routes workflow ?

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
