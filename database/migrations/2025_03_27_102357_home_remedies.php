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
        Schema::create('home_remedies', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('usage');
            $table->enum('prakruti', array('vata','pitta','kapha'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('home_remedies');
    }
};
