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
        Schema::create('data_type_pactices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pepole');
            $table->binary('file');
            $table->boolean('condition');
            $table->char('name');
            $table->dateTime('date_time');
            $table->date('only_date');
            $table->double('flot_data');
            $table->enum('sex',['male','female']);
            $table->float('numbers');
            $table->geometryCollection('position');
            $table->geometry('position_2');
            $table->integer('number_2');
            $table->ipAddress('visitor');
            $table->longText('big_blog');
            $table->json('user_detals');
            $table->decimal('number_3');
            $table->char('valu',50);
            $table->text('text'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_type_pactices');
    }
};
