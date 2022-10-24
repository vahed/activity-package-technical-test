<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actions', function(Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('performer');
            $table->string('subject');
            $table->unsignedBigInteger('performer_id')->index();
            $table->unsignedBigInteger('subject_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
