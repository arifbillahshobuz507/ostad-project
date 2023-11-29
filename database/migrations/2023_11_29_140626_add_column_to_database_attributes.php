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
        Schema::table('database_attributes', function (Blueprint $table) {
            $table->after('email', function(Blueprint $table){
                $table->string('phone');                               
            });
            $table->after('phone',function(Blueprint $table){
                $table->string('password');
            });
            $table->after('pin_code',function(Blueprint $table){
                $table->string('ip_address');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('database_attributes', function (Blueprint $table) {
            //
        });
    }
};
