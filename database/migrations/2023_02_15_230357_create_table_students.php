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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('email',100);
            $table->string('celular',20);
            $table->string('cpf',20);
            $table->string('rg',20);
            $table->date('date_birth');
            $table->string('cep',10);
            $table->string('address',100);
            $table->string('number',10);
            $table->string('neighborhood',100);
            $table->string('city',100);
            $table->string('state',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
