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
        // Schema::table('roles', function (Blueprint $table) {
        //     //
        // });

        DB::table('roles')->insert([
            ['name' => 'Super Admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Academic Office', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOD', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Department', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Academician', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Student', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
};
