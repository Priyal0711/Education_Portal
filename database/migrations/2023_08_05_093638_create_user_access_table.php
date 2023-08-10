<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('user_access', function (Blueprint $table) {
            $table->id();
            $table->string('access_type');
        });

        $data = [
            ['access_type' => 'admin'],
            ['access_type' => 'teacher'],
            ['access_type' => 'student'],
        ];

        DB::table('user_access')->insert($data);
    }

    public function down(): void
    {
        Schema::dropIfExists('user_access');
    }
};
