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
        Schema::create('shopkeepers', function (Blueprint $table) {
            $table->id();
            $table->string('shopkeeper_name',30);
            $table->string('shop_name',25);
            $table->integer('shopkeeper_contact');
            $table->string('shopkeeper_email',30);
            $table->string('shopkeeper_district',20);
            $table->string('shopkeeper_tehsil',20);
            $table->string('shopkeeper_village',20);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopkeepers');
    }
};
