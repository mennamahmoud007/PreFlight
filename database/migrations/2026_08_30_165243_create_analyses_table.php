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
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');

            $table ->unsignedtinyInteger('problem_score');
            $table ->unsignedtinyInteger('target_score');
            $table ->unsignedtinyInteger('value_score');
            $table ->unsignedtinyInteger('feasability_score');
            $table ->unsignedtinyInteger('differentiation_score');
            $table ->unsignedtinyInteger('overall_score');

            $table ->text('summary')->nullable();

            $table ->json('strengths')->nullable();
            $table ->json('weaknesses')->nullable();
            $table ->json('risks')->nullable();
            $table ->json('critical_questions')->nullable();
            $table ->json('improvements')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analyses');
    }
};
