<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cost_centers', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('code');
            $table->string('name');
            $table->longText('description');
            $table->foreignId('organization_id');
            $table->boolean('isActive');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cost_centers');
    }
};
