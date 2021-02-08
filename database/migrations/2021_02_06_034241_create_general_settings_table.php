<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    final public function up(): void
    {
        Schema::create('general_settings', static function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value');
            $table->timestamps();
        });
    }

    final public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
}
