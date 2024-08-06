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
        Schema::create('tb_informações', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('telefone', 14);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('motivocontato', 255);
            $table->string('contato', 255);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    Schema::dropIfExists('tb_informações');

    }
};
