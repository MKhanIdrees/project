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
        Schema::create('rashans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('widows_id');
            $table->foreign('widows_id')->references('id')->on('widows');
            $table->unsignedBigInteger('shopkeepers_id');
            $table->foreign('shopkeepers_id')->references('id')->on('shopkeepers');
            $table->unsignedBigInteger('items_id');
            $table->foreign('items_id')->references('id')->on('items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rashans');
    }
};
