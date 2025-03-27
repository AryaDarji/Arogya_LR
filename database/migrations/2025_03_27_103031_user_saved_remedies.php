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
        Schema::create('user_saved_remedies', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('remedy_id');
            $table->enum('status', array('saved', 'tried', 'tracking'));
            $table->text('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_saved_remedies');
    }
};
