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
        Schema::create('user_questions', function (Blueprint $table) {
            $table->id(); //Primary key
            $table->string('type')->index();
            $table->longText('question');
            $table->json('options');
            $table->boolean('have_followup');
            $table->json('followup_questions')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user_questions');
    }
};
