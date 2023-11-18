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
        Schema::create('widows', function (Blueprint $table) {
            $table->id();
            $table->string('widow_name',30);
            $table->string('husband_name',30);
            $table->integer('widow_contact');
            $table->integer('widow_nic');
            $table->integer('husband_nic');
            $table->string('email',30);
            $table->string('Certificate');
            $table->string('affidavit');
            $table->string('guardian_name',30);
            $table->string('relationship',30);
            $table->integer('guardian_contact');
            $table->string('kids');
            $table->string('form_b');
            $table->string('widow_district',20);
            $table->string('widow_tehsil',20);
            $table->string('widow_village',20);
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
        Schema::dropIfExists('widows');
    }
};
