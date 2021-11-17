<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceTable extends Migration
{
    public function up() 
    {  
        Schema::create('finance', function (Blueprint $table) {
            $table->id();
            $table->string('name_expense');
            $table->string('value');
            $table->integer('due_date');
            $table->string('situation');
            $table->string('recurrence');
            $table->string('category');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('finance');
    }
}
