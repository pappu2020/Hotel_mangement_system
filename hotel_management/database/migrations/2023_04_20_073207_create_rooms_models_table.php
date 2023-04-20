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
        Schema::create('rooms_models', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("roomNum");
            $table->integer("roomPrice");
            $table->integer("roomPerson");
            $table->longText("description");
            $table->string("ac_nonac");
            $table->date("booking_date")->nullable();
            $table->date("checking_date")->nullable();
            $table->date("checkout_date")->nullable();
            $table->string("status")->nullable();
            $table->string("location");
            $table->string("picture")->nullable();
            $table->integer("creat_by");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms_models');
    }
};



