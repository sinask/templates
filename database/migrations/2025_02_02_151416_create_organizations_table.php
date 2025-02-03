<?php

use App\Parameters\OrganizationType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('organizations', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('code');
      $table->string('name');
      $table->integer('organizationType')->default(OrganizationType::Pending->value);
      $table->text('description');
      $table->boolean('isActive')->default(true);
      $table->foreignId('parent_id')->nullable()->constrained('organizations')->nullOnDelete(); // Self-referencing parent_id
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('organizations');
  }
};
