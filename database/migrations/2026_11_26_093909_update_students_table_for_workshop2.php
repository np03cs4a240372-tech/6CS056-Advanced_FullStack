<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('name', 100)->change();

            $table->string('email', 256)->change();

            $table->string('phone', 20)->nullable()->change();

            $table->date('date_of_birth')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('name', 255)->change();

            $table->string('email', 255)->change();

            $table->string('phone', 255)->nullable(false)->change();

            $table->date('date_of_birth')->nullable()->change();
        });
    }
};
