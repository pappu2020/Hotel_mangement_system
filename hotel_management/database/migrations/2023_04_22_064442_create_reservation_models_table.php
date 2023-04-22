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
        Schema::create('reservation_models', function (Blueprint $table) {
            $table->id();
            $table->integer("room_id");
            $table->string("customer_name");
            $table->string("customer_email");
            $table->integer("customer_phone");
            $table->string("customer_address");
            $table->integer("adult_number");
            $table->integer("children_number");
            $table->date("check_in_date");
            $table->date("check_out_date");
            $table->string("notes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_models');
    }
};
