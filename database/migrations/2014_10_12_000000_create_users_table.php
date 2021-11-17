<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{// O up método é usado para adicionar novas tabelas, colunas ou índices ao seu banco de dados

    //Cadastrar usuario
    public function up() 
    {  
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('cpf')->unique();
            $table->integer('date');
            $table->integer('genre');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    // O down método deve reverter as operações realizadas pelo up método
    public function down() 
    {
        Schema::dropIfExists('users');
    }
}
